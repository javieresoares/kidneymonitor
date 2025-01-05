from flask import Flask, request, jsonify
import pickle
import numpy as np
import os

app = Flask(__name__)

# Path model (gunakan path relatif atau absolut sesuai kebutuhan)
model_path = os.path.join(os.path.dirname(__file__), 'model.pkl')

# Load model with error handling
try:
    with open(model_path, 'rb') as model_file:
        model = pickle.load(model_file)
    print("Model berhasil dimuat.")
except FileNotFoundError:
    print(f"Model tidak ditemukan di path: {model_path}")
    model = None
except Exception as e:
    print(f"Terjadi kesalahan saat memuat model: {e}")
    model = None

print(f'Model type: {type(model)}')  # Debugging: Memastikan tipe model yang dimuat
print(type(model))  # Debugging: Memastikan tipe model yang dimuat

# Root route
@app.route('/')
def home():
    return "Hello, World!"

# Classify route
@app.route('/classify', methods=['POST'])
def classify():
    if model is None:
        return jsonify({'error': 'Model gagal dimuat, coba lagi nanti.'}), 500

    try:
        data = request.get_json()

        # Pastikan data valid
        if not data:
            return jsonify({'error': 'Data tidak ditemukan dalam request.'}), 400

        required_features = ['bp', 'bgr', 'rc', 'sg', 'bu', 'htn', 'al', 'sc', 'dm', 'su', 'sod', 'cad', 
                             'rbc', 'pot', 'appet', 'pc', 'hemo', 'pe', 'pcc', 'pvc', 'ane', 'ba', 'wc']

        # Memeriksa apakah semua fitur ada dalam data
        missing_features = [feature for feature in required_features if feature not in data]
        if missing_features:
            return jsonify({'error': f'Fitur berikut tidak ditemukan: {", ".join(missing_features)}'}), 400

        # Menyiapkan data untuk prediksi
        features = np.array([data[feature] for feature in required_features]).reshape(1, -1)

        # Prediksi
        prediction = model.predict(features)

        # Menentukan klasifikasi
        classification = 'normal' if prediction[0] == 0 else 'ckd'

        return jsonify({'classification': classification})

    except Exception as e:
        return jsonify({'error': f'Terjadi kesalahan: {str(e)}'}), 500

if __name__ == '__main__':
    app.run(debug=True, host='0.0.0.0', port=5000)

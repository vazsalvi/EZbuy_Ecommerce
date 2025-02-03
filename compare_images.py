import sys
import cv2
import numpy as np
import os
from skimage.metrics import structural_similarity as compare_ssim
import mysql.connector

def image_similarity(image1_path, image2_path):
    # Load the images
    img1 = cv2.imread(image1_path, cv2.IMREAD_GRAYSCALE)
    img2 = cv2.imread(image2_path, cv2.IMREAD_GRAYSCALE)

    # Resize images to the same size
    img1 = cv2.resize(img1, (500, 500))
    img2 = cv2.resize(img2, (500, 500))

    # Compute the Structural Similarity Index (SSI) between the two images
    score, diff = compare_ssim(img1, img2, full=True)
    return score

uploaded_image = sys.argv[1]
image_directory = "C:/xampp/htdocs/Ai_driven_ecommerce/admin_area/product_images/"

# Connect to the MySQL database
db = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="mystore"
)
cursor = db.cursor()

# Fetch product images from the database
cursor.execute("SELECT product_id, product_title, product_image1, product_image2, product_image3 FROM products")
products = cursor.fetchall()

results = []

for product in products:
    product_id, product_title, product_image1, product_image2, product_image3 = product
    for image_name in [product_image1, product_image2, product_image3]:
        image_path = os.path.join(image_directory, image_name)
        score = image_similarity(uploaded_image, image_path)
        results.append((product_id, product_title, image_name, score))

# Sort results by similarity score in descending order
results.sort(key=lambda x: x[3], reverse=True)

# Print results in the desired format
for result in results:
    print(f"{result[0]},{result[1]},{result[2]},{result[3]}")

# Close the database connection
cursor.close()
db.close()

# Remove temporary uploaded image
os.remove(uploaded_image)

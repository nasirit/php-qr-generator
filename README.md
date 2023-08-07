# QR Code Generator using endroid/qr-code

This repository contains a PHP script that generates QR codes using the `endroid/qr-code` library. The script can be used to generate QR codes for provided data and display them in the browser. Additionally, the generated QR codes are saved and then deleted after serving, reducing storage requirements.

## Usage

1. Clone or download this repository to your web server's directory.
2. Install the required composer packages by navigating to the repository folder

To generate a QR code, access the index.php script using your web browser and provide the data as a query parameter. For example:

http://your-domain.com/qr/?data=YourQRCodeDataHere

Replace YourQRCodeDataHere with the data you want to encode into the QR code.

The QR code image will be generated and displayed directly in the browser.

The generated QR code image will also be saved in the server directory and then deleted after serving. This helps to avoid cluttering your server's storage.


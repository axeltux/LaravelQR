# LaravelQR

## Ejemplo de uso simple de generacion de codigo QR

## Instalar el paquete:

# composer require simplesoftwareio/simple-qrcode

//config/app.php

'providers' => [
 ….
 SimpleSoftwareIO\QrCode\QrCodeServiceProvider::class
 ],

'aliases' => [
 ….
 'QrCode' => SimpleSoftwareIO\QrCode\Facades\QrCode::class
 ],

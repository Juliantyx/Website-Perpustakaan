<?php

namespace App\Libraries;

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Color\Color;

class QRGenerator
{
    protected PngWriter $writer;
    protected Logo $logo;
    protected Label $label;
    protected Color $foregroundColor;
    protected Color $backgroundColor;
    protected Color $textColor;

    public function __construct(
        Color $foregroundColor = null,
        Color $backgroundColor = null,
        Color $textColor = null
    ) {
        $this->writer = new PngWriter();

        // Set default warna jika null
        $this->foregroundColor = $foregroundColor ?? new Color(10, 15, 30);
        $this->backgroundColor = $backgroundColor ?? new Color(255, 255, 255);
        $this->textColor = $textColor ?? new Color(10, 15, 30);

        $this->logo = Logo::create('')->setResizeToWidth(75);
        $this->label = Label::create('')->setTextColor($this->textColor);
    }

    public function generateQRCode(
        string $data,
        string $labelText = null,
        string $dir = QR_CODES_PATH,
        string $filename = 'My QR Code',
        string $logoPath = null
    ) {
        if (!file_exists($dir)) {
            mkdir($dir, 0777, true);
        }

        // Membuat nama file QR Code yang unik dan SEO friendly
        $filename = url_title(substr($filename, 0, 16), lowercase: true) . '_'
            . substr(sha1($filename . rand(0, 1000)), 19, 5) . '_'
            . time() . '.png';

        // Buat objek QRCode baru setiap generate dengan data baru
        $qrCode = QrCode::create($data)
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelHigh())
            ->setSize(300)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor($this->foregroundColor)
            ->setBackgroundColor($this->backgroundColor);

        // Siapkan label jika ada
        $label = $labelText ? $this->label->setText($labelText) : null;

        // Siapkan logo jika path diberikan
        $logo = $logoPath ? Logo::create($logoPath)->setResizeToWidth(75) : null;

        // Generate dan simpan file QR Code
        $this->writer
            ->write(
                qrCode: $qrCode,
                label: $label,
                logo: $logo
            )
            ->saveToFile(path: $dir . $filename);

        return $filename;
    }
}

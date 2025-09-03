<?php
require '../vendor/autoload.php';

use Aws\S3\S3Client;
use Aws\Exception\AwsException;

// Credenciales DO Spaces
$space_name = "limacfiles";
$region = "sfo3";
$endpoint = "https://$region.digitaloceanspaces.com";
$accessKey = "DO801UT849WZUJXFE7H6";
$secretKey = "1fq0uxiUXHnHXUN4GznGZshKcCwI7SqX+TkfuL2MGP0";

// Validar archivo recibido
if (!isset($_FILES['archivo'])) {
    echo json_encode(["error" => "No se recibió archivo"]);
    exit;
}

$file = $_FILES['archivo']['tmp_name'];
$filename = basename($_FILES['archivo']['name']);

try {
    // Crear cliente S3 (DO Spaces usa S3 compatible)
    $s3 = new S3Client([
        'version'     => 'latest',
        'region'      => $region,
        'endpoint'    => $endpoint,
        'credentials' => [
            'key'    => $accessKey,
            'secret' => $secretKey,
        ],
    ]);

    // Subir el archivo
    $result = $s3->putObject([
        'Bucket'     => $space_name,
        'Key'        => "uploads/" . $filename,
        'SourceFile' => $file,
        'ACL'        => 'public-read'
    ]);

    echo json_encode([
        "url"      => $result['ObjectURL'],
        "filename" => $filename
    ]);
} catch (AwsException $e) {
    echo json_encode([
        "error"     => $e->getMessage(),
        "http_code" => $e->getStatusCode() ?? 500
    ]);
}

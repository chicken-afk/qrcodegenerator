<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>

    <div class="form">
        <h1>QR Code using qrcodejs</h1>
        <form>
            <input type="url" id="website" name="website" style="width: 40rem" placeholder="https://webisora.com"
                required />
            <button type="button" onclick="generateQRCode()">
                Generate QR Code
            </button>
        </form>

        <div id="qrcode-container">
            <div id="qrcode" class="qrcode"></div>
            <h4>With some styles</h4>
            <div id="qrcode-2" class="qrcode"></div>
        </div>

        <script type="text/javascript">
            function generateQRCode() {
                let website = document.getElementById("website").value;
                if (website) {
                    let qrcodeContainer = document.getElementById("qrcode");
                    qrcodeContainer.innerHTML = "";
                    new QRCode(qrcodeContainer, website);
                    /*With some styles*/
                    let qrcodeContainer2 = document.getElementById("qrcode-2");
                    qrcodeContainer2.innerHTML = "";
                    new QRCode(qrcodeContainer2, {
                        text: website,
                        width: 1000,
                        height: 1000,
                        colorDark: "#080000",
                        colorLight: "#ffffff",
                        correctLevel: QRCode.CorrectLevel.H
                    });
                    document.getElementById("qrcode-container").style.display = "block";
                } else {
                    alert("Please enter a valid URL");
                }
            }
        </script>
    </div>

</body>

</html>

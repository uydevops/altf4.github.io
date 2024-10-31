<?php
$subdomain = isset($_GET["subdomain"]) ? htmlspecialchars($_GET["subdomain"]) : '';
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="minimum-scale=1.0, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width, height=device-height" />
    <title><?php echo $subdomain; ?> - My Website</title>
    <script type="text/javascript" src="https://tawk.to/public/scripts/popout.js"></script>
    <script type="text/javascript">
        var Tawk_API = {
            isPopup: true,
            onLoad: function () {
                var dataObj = parseQueryString();
                if (dataObj.tags !== undefined) {
                    Tawk_API.addTags(dataObj.tags);
                }
                if (dataObj.event !== undefined) {
                    if (dataObj.attrLength !== 0) {
                        Tawk_API.addEvent(dataObj.event, dataObj.attributes);
                    } else {
                        Tawk_API.addEvent(dataObj.event);
                    }
                }
            }
        }, Tawk_LoadStart = new Date();

        (function(){
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/668643d8eaf3bd8d4d17e9fd/1i1u7i1gk';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1,s0);
        })();

        function updateIframeContent() {
            var iframe = document.querySelector("iframe[title*=chat]:nth-child(2)");
            if (iframe) {
                var iframeDoc = iframe.contentDocument || iframe.contentWindow.document;
                var body = iframeDoc.querySelector('body');
                if (body) {
                    body.style.setProperty('--tawk-header-background-color', '#ffc600');
                }
                var searchButton = iframeDoc.querySelector('button[class*=tawk-search-button]');
                if (searchButton) {
                    searchButton.style.setProperty('--tawk-header-background-color', 'linear-gradient(0deg, #ff8e28, #ffc600)');
                }
                var text_inputs = iframeDoc.querySelectorAll('textarea[class*=tawk-chatinput-editor]');
                var send_button = iframeDoc.querySelector('button[class*=tawk-chatinput-send]');
                if (text_inputs.length > 0 && send_button) {
                    var last_text_input = text_inputs[text_inputs.length - 1];
                    last_text_input.addEventListener('input', function(e) {
                        if (!last_text_input.value.startsWith("[<?php echo $subdomain; ?>]")) {
                            last_text_input.value = "[<?php echo $subdomain; ?>] " + last_text_input.value;
                        }
                    });
                }
                var card = iframeDoc.querySelector('div[class*=tawk-card] div[class*=tawk-text-center]');
                if (card) {
                    card.remove();
                }
                var top_header = iframeDoc.querySelector('div[class*=tawk-toolbar]');
                if (top_header) {
                    top_header.remove();
                }
                var button = iframeDoc.querySelector('a[class*=tawk-button-small]');
                if (button) {
                    button.remove();
                }
            }
        }

        setInterval(updateIframeContent, 100);
    </script>
</head>
<body style="margin: 0px;"></body>
</html>

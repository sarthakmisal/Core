
<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0%;
            padding: 0%;
        }
        .box, .vid{
            height: 300px;
            width: 600px;
            border: 2px solid black;
            
            /* background-color: aqua; */
           
        }
        
    </style>
</head>
<body>
    <div class="box">
        <div class="vid">
            <video src="start" autoplay></video>
        </div>
    </div>
    <button id="start">Start Screen Share</button>


    <script>
        start.onclick = async() =>{
            const Screen = await navigator.mediaDevices.getDisplayMedia
            ({video:true});
            video.srcObject = screen;
        }
    </script>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <title>Screen Sharing Demo</title>
    <style>
        #localVideo, #remoteVideo {
            width: 50%;
            height: auto;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Screen Sharing Demo</h1>
    <video id="localVideo" autoplay muted></video>
     <video id="remoteVideo" autoplay></video> 
    <button onclick="sharePage()">Share</button>
    <script>
        async function sharePage(){
            await navigator.share({
                title:document.title,
                url:window.location.href
            });
        };
    </script>

    <script>
        const startButton = document.createElement('button');
        startButton.textContent = 'Start Sharing';
        startButton.onclick = startScreenSharing;
        document.body.appendChild(startButton);

        async function startScreenSharing() {
            try {
                const stream = await navigator.mediaDevices.getDisplayMedia({ video: true });

                const localVideo = document.getElementById('localVideo');
                localVideo.srcObject = stream;

                const peerConnection = new RTCPeerConnection();
                stream.getTracks().forEach(track => peerConnection.addTrack(track, stream));

                peerConnection.ontrack = event => {
                    const remoteVideo = document.getElementById('remoteVideo');
                    if (!remoteVideo.srcObject) {
                        remoteVideo.srcObject = event.streams[0];
                    }
                };

                // const offer = await peerConnection.createOffer();
                // await peerConnection.setLocalDescription(offer);

                peerConnection.onicecandidate = event => {
                    if (event.candidate) {
                        console.log('ICE candidate:', event.candidate);
                    }
                };

                // Send the offer to the other peer (could be through signaling server)
                console.log('Offer:', offer);
            } catch (err) {
                console.error('Error starting screen sharing:', err);
            }
        }
    </script>
</body>
</html>

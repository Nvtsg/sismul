<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multimedia System Preview</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Pacifico&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f0f8ff;
      padding: 20px;
      line-height: 1.6;
    }
    header {
      text-align: center;
      padding-bottom: 20px;
    }
    h1 {
      font-size: 2.5em;
      color: #333;
    }
    .highlight {
      font-style: italic;
      font-weight: bold;
      color: #1a73e8;
    }
    .fancy-font {
      font-family: 'Pacifico', cursive;
      color: #d63384;
      font-size: 1.5em;
    }
    .moving-text {
      width: 100%;
      overflow: hidden;
      white-space: nowrap;
      box-sizing: border-box;
    }
    .moving-text span {
      display: inline-block;
      padding-left: 100%;
      animation: scrollText 10s linear infinite;
    }
    @keyframes scrollText {
      0%   { transform: translate(0, 0); }
      100% { transform: translate(-100%, 0); }
    }
    .image-section {
      text-align: center;
    }
    .image-section img {
      max-width: 100%;
      width: 100%;
      height: auto;
      display: block;
      margin: 10px auto;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .audio-section {
      text-align: center;
      margin-top: 40px;
    }
  </style>
</head>
<body>
  <header>
    <h1>Multimedia System Preview</h1>
    <p class="highlight">Exploring the power of TEXT in Multimedia</p>
  </header>

  <section>
    <h2>What is a Multimedia System?</h2>
    <p>A multimedia system is a system that integrates multiple forms of media, including text, audio, images, animations, and video, to communicate information effectively.</p>
  </section>

  <section>
    <h2>Focus: TEXT as a Multimedia Element</h2>
    <p>Text is one of the most fundamental elements of multimedia. It conveys information directly and can be enhanced in many ways:</p>
    <ul>
      <li><strong>Bold Text.</strong></li>
      <li><em>Italic Text</em></li>
      <li><u>Underline Text</u></li>
      <li><span class="fancy-font">Custom Fonts</span></li>
      <li style="color: purple;">Colorful Text</li>
    </ul>

    <div class="moving-text">
      <span>Steven Go Nathaniel Jethro - 51421435 - 4IA22</span>
    </div>
  </section>

  <section class="image-section">
    <h2>Images in Multimedia</h2>
    <p>Images can visually enrich the presentation and better engage the viewer.</p>
    <img src="assets/img/img1.jpeg" alt="Multimedia Sample Image 1">
    <img src="assets/img/img2.jpeg" alt="Multimedia Sample Image 2">
  </section>

  <section class="audio-section">
    <h2>Audio in Multimedia</h2>
    <p>Audio can be used to provide narration, music, or sound effects to enhance the multimedia experience.</p>
    <audio controls>
      <source src="assets/audio/audio1.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
    </audio>
  </section>

  <section class="video-section" style="text-align: center; margin-top: 40px;">
    <h2>Video in Multimedia</h2>
    <p>Video adds dynamic visual content to support learning and engagement.</p>
    <video controls style="max-width: 100%; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
      <source src="assets/video/video1.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </section>

  <footer style="margin-top: 40px; text-align: center;">
    <p>&copy; <?php echo date("Y"); ?> Gunadarma University</p>
  </footer>
</body>
</html>

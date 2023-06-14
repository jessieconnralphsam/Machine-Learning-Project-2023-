<?php require_once('config.php'); ?>
 <!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<?php require_once('inc/header.php') ?>
  <body class="layout-top-nav">
    <div class="wrapper">
     <?php require_once('inc/topBarNav.php') ?>
              
     <?php $page = isset($_GET['page']) ? $_GET['page'] : 'home';  ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper pt-3" style="min-height: 567.854px;">
     
        <!-- Main content -->
        <section class="content  text-dark">
          <div class="container">
            <?php 
              if(!file_exists($page.".php") && !is_dir($page)){
                  include '404.html';
              }else{
                if(is_dir($page))
                  include $page.'/index.php';
                else
                  include $page.'.php';

              }
            ?>
          </div>
        </section>
        <!-- /.content -->
  
  <div class="modal fade" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit();predict();">Save</button> -->
        <button type="button" class="btn btn-primary" id='submit' onclick="predict(); setTimeout(function() { $('#uni_modal form').submit(); }, 3000);">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="confirm_modal" role='dialog' data-backdrop='static'>
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
      </div>
      <div class="modal-body">
        <div id="delete_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal_right" role='dialog'>
    <div class="modal-dialog modal-full-height  modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="fa fa-arrow-right"></span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="viewer_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
              <button type="button" class="btn-close" data-dismiss="modal"><span class="fa fa-times"></span></button>
              <img src="" alt="">
      </div>
    </div>
  </div>
      </div>
      <!-- /.content-wrapper -->
      <?php require_once('inc/footer.php') ?>

  <script>
  
    // Load the Teachable Machine model
    async function loadModel() {
        const model = await tf.loadLayersModel('teacheable/model.json');
    return model;
  }

  // Preprocess the input image
      function preprocessImage(image) {
        // Resize the image to match the input shape of the model
        const resizedImage = tf.image.resizeBilinear(image, [224, 224]);

    // Normalize the pixel values between -1 and 1
    const normalizedImage = resizedImage.div(255).sub(0.5).mul(2);

    // Expand the dimensions to match the input shape of the model
    const batchedImage = normalizedImage.expandDims(0);

    return batchedImage;
  }

  // Make predictions with the model
      async function predict() {
        const imageInput = document.getElementById('images');
    const image = await loadImage(imageInput.files[0]);
    const preprocessedImage = preprocessImage(image);

    const model = await loadModel();
    const predictions = model.predict(preprocessedImage);
    const predictedLabel = predictions.argMax(1).dataSync()[0];

    console.log('Predicted Label:', predictedLabel);

    // mapping as per your label classes
        const labelMap = {0: {name: 'Apple', //name of plant
                          species:'', //species og plant
                          variety:'', //variety of plant
                          disease: 'Scab', //name of disease
                          description: '', //des of disease
                          effects:'', //disease effects on plant like growth, yield etc.
                          cause:'', // organism or factors causes
                          medicine: '', //possible med in market
                          prevention:'', //prenvention
                         },
                      1: 'Apple Black Rot',
                      2: 'Apple Healthy',
                      3:'Blueberry Healthy',
                      4:'Cherry Healthy',
                      5:'Cherry Powdery Mildew',
                      6:'Corn Cercos Pora',
                      7:'Corn Common Rust',
                      8:'Corn Healthy',
                      9:'Corn Northern Leaf Blight',
                      10:'Grape Black Rot',
                      11:'Grape Black Measles',
                      12:'Grape Healthy',
                      13:'Grape Isariopsis Leaf Spot',
                      14:'Orange Haunglongbing',
                      15:'Peach Bacterial Spot',
                      16:'Peach Healthy',
                      17:'Pepper Bacterial Spot',
                      18:'Pepper Healthy',
                      19:'Potato Early Blight',
                      20:'Raspberry Healthy',
                      21:'Soybean Healthy',
                      22:'Squash Powdery Mildew',
                      23:'Strawberry Healthy',
                      24:'Strawberry Leaf Scorch',
                      25:'Tomato Bacterial Spot',
                      26:'Tomato Early Blight',
                      27:'Tomato Healthy',
                      28:'Tomato Late Blight',
                      29:'Tomato Leaf Mold',
                      30:'Tomato Septoria Leaf Spot',
                      31:'Tomato Spider Mites',
                      32:'Tomato Target Spot',
                      33:'Tomato Mosaic Virus',
                      34:'Tomato Yellow Leaf Curl Virus',
                      35:'Apple Cedar Rust',
                      36:'Potato Healthy',
                      37:'Potato Late Blight',
                      };

    //variable for prediction
    // const predictedWord = labelMap[predictedLabel].name;
    // console.log('predictedWord:', predictedWord);
    const predictedWord = labelMap[predictedLabel].name;
    console.log('predictedWord:', predictedWord);

    const url = `http://localhost/ML_Project-2023-/teacheable.php?predictedWord=${predictedWord}`;

    fetch(url, { method: 'GET' })
      .then(response => {
        // Handle the response
        console.log('Data inserted successfully!');
      })
      .catch(error => {
        // Handle any errors
        console.error('Error inserting data:', error);
      }); 
    
  }

  // Load image using FileReader
      function loadImage(file) {
        return new Promise((resolve, reject) => {
          const reader = new FileReader();
          reader.onload = () => {
            const img = new Image();
    img.onload = () => resolve(tf.browser.fromPixels(img));
    img.onerror = (error) => reject(error);
    img.src = reader.result;
  };
  reader.readAsDataURL(file);
});
}
</script>
  </body>
</html>

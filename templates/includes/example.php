<main role="main">
  <div class="jumbotron">
    <h1 class="display-4"><?php echo SITE_NAME; ?></h1>
    <p class="lead"><?php echo SITE_KEYWORDS; ?></p>
    <p class="lead"><a class="btn btn-primary btn-lg btn-rounded" href="" role="button">Learn more</a></p>
  </div>
  <!--Marketing messaging and featurettes ==================================================-->
  <!-- Wrap the rest of the page in another container to center all the content.-->
  <div class="container marketing p-3">
    <div class="row">
      <div class="col-lg-4">
      <?php echo lazy(
        /*$image*/ 'https://placekitten.com/196/196',
        /*$type*/ '',
        /*$class*/ 'rounded-circle mb-3',
        /*$alt*/ 'Generic placeholder image',
        /*$external*/ true);
      ?>
        <h2>Heading</h2>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies
          vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus
          magna.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
      </div>
      <!-- /.col-lg-4-->
      <div class="col-lg-4">
        <?php echo lazy(
          /*$image*/ 'https://placekitten.com/196/196',
          /*$type*/ '',
          /*$class*/ 'rounded-circle mb-3',
          /*$alt*/ 'Generic placeholder image',
          /*$external*/ true);
        ?>
        <h2>Heading</h2>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis
          consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.
        </p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
      </div>
      <!-- /.col-lg-4-->
      <div class="col-lg-4">
      
      <?php echo lazy(
        /*$image*/ 'https://placekitten.com/196/196',
        /*$type*/ '',
        /*$class*/ 'rounded-circle mb-3',
        /*$alt*/ 'Generic placeholder image',
        /*$external*/ true);
      ?>
        <h2>Heading</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta
          felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
          massa justo sit amet risus.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
      </div>
      <!-- /.col-lg-4-->
      <!-- /.row-->
      <!-- START THE FEATURETTES-->
      <hr class="featurette-divider">
      <div class="row featurette p-3">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span>
          </h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
            semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
            commodo.</p>
        </div>
        <div class="col-md-5">
            <?php echo lazy(
              /*$image*/ 'example/test-image',
              /*$type*/ 'jpg',
              /*$class*/ 'featurette-image img-fluid mx-auto w-100',
              /*$alt*/ 'Generic placeholder image',
              /*$external*/ false);
            ?>
        </div>
      </div>
      <hr class="featurette-divider">
      <div class="row featurette p-3">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
            semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
            commodo.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <?php echo lazy(
              /*$image*/'https://placekitten.com/800/600',
              /*$type*/'',
              /*$class*/'featurette-image img-fluid mx-auto w-100',
              /*$alt*/'Generic placeholder image 2',
              /*$external*/true);
            ?>
      </div>
      <hr class="featurette-divider">
      <div class="row featurette p-3">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
            semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
            commodo.</p>
        </div>
        <div class="col-md-5">
            <?php echo lazy(
              /*$image*/ 'https://placekitten.com/700/500',
              /*$type*/ '',
              /*$class*/ 'featurette-image img-fluid mx-auto w-100',
              /*$alt*/ 'Generic placeholder image 2',
              /*$external*/true);
            ?>
      </div>
      <hr class="featurette-divider">
      <!-- /END THE FEATURETTES-->
      <!-- /.container-->
    </div>
  </div>
</main>
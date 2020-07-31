<!-- Homepage -->

<div class="container mt-2">
	<div class="jumbotron">
	  <h1 class="display-4">Everything Becomes <b>More Organized</b></h1>
	  <p class="lead">With <b>QiList</b>, note your activity plan to make it more directed and improving your quality live.</p>
	  <hr class="my-4">
	  <a class="btn btn-primary btn-lg" href="<?= BASEURL; ?>/task" role="button"><b>Get Started</b></a>
	</div>
	<div class="card">
  <div class="card-header d-flex justify-content-center">
    <h4>Quotes</h4>
	 </div>
	  <div class="card-body">
	    <blockquote class="blockquote mb-0">
	      <p>"<?= $data['fakeQuote']; ?>"</p>
	      <footer class="blockquote-footer"><?= $data['fakeName']; ?> in <cite title="Source Title"><?= $data['fakeCompany']; ?></cite></footer>
	    </blockquote>
	  </div>
	</div>
</div>


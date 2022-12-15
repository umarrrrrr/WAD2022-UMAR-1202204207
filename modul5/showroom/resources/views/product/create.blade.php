@extends('layout')
@section('content')
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				
					<div>
						<!-- YOUR CODE START HERE -->
                        <form action="/product" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="from-group">
                                <label for="name">Product Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>

                            <div class="from-group">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" id="price" name="price">
                            </div>

                            <div class="custom-file" style="margin-top: 30px; margin-bottom: 30px">
                                <input type="file" class="custom-file-input" id="img_path" name="img_path">
                                <label class="custom-file-label" for="customFile">Choose image</label>
                            </div>
                            <div style="margin-top: 30px">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>


						 <!-- YOUR CODE ENDS HERE -->
					</div>
				</div>
			</div>
	</section><!--/form-->
    @endsection
    
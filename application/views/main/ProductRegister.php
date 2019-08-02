<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('main/aside');
$this->load->view('main/header');
?>
<title>
    Product Add
</title>
<br/>
<br/>
<br/>
<div class="page-wrapper">
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Product</strong> Add
        </div>
        <div class="card-body card-block">
            <form action="../product/register" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="Product-name" class=" form-control-label">Product Name *</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="prodName" name="prodName" placeholder="Name" class="form-control">
                        <small class="form-text text-muted">Product Name goes here</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="size" class="form-control-label">Size *</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="prodSize" name="prodSize" placeholder="Enter Size" class="form-control">
                        <small class="help-block form-text">Please enter Product size along with Unit</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="colour" class="form-control-label">Colour *</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="prodColour" name="prodColour" placeholder="Enter Colour" class="form-control">
                        <small class="help-block form-text">Please enter Product colour</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="colour" class="form-control-label">Original Rate</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="origRate" name="origRate" placeholder="Enter Original rate" class="form-control" step="0.01">
                        <small class="help-block form-text">Please enter Original Rate which appears like ex: <del>₹ 875.00</del></small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="Final-Rate" class="form-control-label">Final/Discounted Rate *</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="finRate" name="finRate" placeholder="Enter Final Rate" class="form-control" step="0.01">
                        <small class="help-block form-text">Please enter Final Rate</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="Category" class="form-control-label">Category</label>
                    </div>
                    <div class="col-12 col-md-9">
                    <select name="prodCat" id="prodCat" class="form-control-lg form-control">
                            <option value="0">Please select</option>
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                    </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="Brand-Name" class="form-control-label">Brand Name *</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="prodBrand" name="prodBrand" placeholder="Enter Brand Name" class="form-control">
                        <small class="help-block form-text">Please enter Brand Name ex: Samsung/Adidas</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class=" form-control-label">Mode *</label>
                    </div>
                    <div class="col col-md-9">
                        <div class="form-check">
                            <div class="radio">
                                <label for="radio1" class="form-check-label ">
                                    <input type="radio" id="onlineRadio" name="mode" value="1" class="form-check-input" checked>Online
                                </label>
                            </div>
                            <div class="radio">
                                <label for="radio2" class="form-check-label ">
                                    <input type="radio" id="offlineRadio" name="mode" value="0" class="form-check-input">Offline
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="Short-Description" class="form-control-label">Short Description *</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="shortDesc" id="shortDesc" rows="4" placeholder="Short Desc..." class="form-control"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="Long-Description" class="form-control-label">Long Description *</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="longDesc" id="longDesc" rows="10" placeholder="Long Desc..." class="form-control"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-multiple-input" class=" form-control-label">Product Images (Max 3)</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="prodImages" name="prodImages[]" multiple="" class="form-control-file">
                    </div>
                </div>
                <div class="gallery"></div>
            <!-- </form> -->
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button>
        </div>
        </form>
    </div>
    </div>
</div>
<?php
$this->load->view('main/footer');
?>
<script>
$(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img width="25%" height="25%">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#prodImages').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });
});
</script>
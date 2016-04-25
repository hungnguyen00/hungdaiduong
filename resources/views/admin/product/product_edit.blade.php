@extends('layouts.dashboard')
@section('page_heading','Chi tiết sản phẩm')

@section('section')
<div class="row">
                <div class="col-md-12">
                    <div class="tabcordion">
                        <ul id="myTab" class="nav nav-tabs">
                            <li class=""><a href="#product_general" data-toggle="tab">General</a></li>
                            <li class=""><a href="#product_meta" data-toggle="tab">SEO</a></li>
                            <li class="active"><a href="#product_images" data-toggle="tab">Images</a></li>
                            <li><a href="#product_reviews" data-toggle="tab">Reviews 
                                <span class="m-l-10 badge badge-primary">5</span></a>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade" id="product_general">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form id="form1" class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Product Name <span class="asterisk">*</span>
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" value="Product 1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Reference <span class="asterisk">*</span>
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" value="BG 547 874 587">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Long Description <span class="asterisk">*</span>
                                            </label>
                                            <div class="col-sm-7">
                                                <textarea rows="6" class="form-control" placeholder="Description goes here..."></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Short description</label>
                                            <div class="col-sm-7">
                                                <textarea rows="4" class="form-control" placeholder="Maximum 220 characters"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Categories <span class="asterisk">*</span></label>
                                            <div class="col-sm-7">
                                                <select class="form-control" multiple="" title="Choose one or more" style="display: none;">
                                                <optgroup label="Type">
                                                    <option>Shirts</option>
                                                    <option>Shoes</option>
                                                    <option>Underwear</option>
                                                </optgroup>
                                                <optgroup label="Brand">
                                                    <option>Adidas</option>
                                                    <option>Nike</option>
                                                    <option>Reebok</option>
                                                </optgroup>
                                            </select><div class="btn-group bootstrap-select show-tick form-control"><button type="button" class="btn dropdown-toggle selectpicker btn-default" data-toggle="dropdown" title="Choose one or more"><span class="filter-option pull-left">Choose one or more</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner selectpicker" role="menu"><li rel="0"><dt><span class="text">Type</span></dt><a tabindex="0" class="opt " style=""><span class="text">Shirts</span><i class="fa fa-check icon-ok check-mark"></i></a></li><li rel="1"><a tabindex="0" class="opt " style=""><span class="text">Shoes</span><i class="fa fa-check icon-ok check-mark"></i></a></li><li rel="2"><a tabindex="0" class="opt " style=""><span class="text">Underwear</span><i class="fa fa-check icon-ok check-mark"></i></a></li><li rel="3"><div class="div-contain"><div class="divider"></div></div><dt><span class="text">Brand</span></dt><a tabindex="0" class="opt " style=""><span class="text">Adidas</span><i class="fa fa-check icon-ok check-mark"></i></a></li><li rel="4"><a tabindex="0" class="opt " style=""><span class="text">Nike</span><i class="fa fa-check icon-ok check-mark"></i></a></li><li rel="5"><a tabindex="0" class="opt " style=""><span class="text">Reebok</span><i class="fa fa-check icon-ok check-mark"></i></a></li></ul></div></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Price <span class="asterisk">*</span>
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" value="$25.95">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label m-t-10">Status <span class="asterisk">*</span>
                                            </label>
                                            <div class="col-sm-7">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="ui-radio"><label class="ui-btn ui-corner-all ui-btn-inherit ui-btn-icon-left ui-radio-on">
                                                            Online
                                                        </label><input type="radio" name="radio-choice-0" checked=""></div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="ui-radio"><label class="ui-btn ui-corner-all ui-btn-inherit ui-btn-icon-left ui-radio-off">
                                                            Offline
                                                        </label><input type="radio" name="radio-choice-0"></div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="ui-radio"><label class="ui-btn ui-corner-all ui-btn-inherit ui-btn-icon-left ui-radio-off">
                                                        Draft
                                                    </label><input type="radio" name="radio-choice-0"></div> 
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Comment
                                            </label>
                                            <div class="col-sm-7">
                                                <textarea rows="5" class="form-control valid" placeholder="Optional comment..."></textarea>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="product_meta">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Meta Title <span class="asterisk">*</span>
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" value="Product 1 : buy your shirt with Pixit">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Meta Description <span class="asterisk">*</span>
                                            </label>
                                            <div class="col-sm-7">
                                                <textarea rows="4" class="form-control" placeholder="Max 255 characters..."></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Meta Keywords
                                            </label>
                                            <div class="col-sm-7">
                                                <textarea rows="6" class="form-control" placeholder="Max 1000 characters..."></textarea>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade active in" id="product_images">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table id="product-review" class="table">
                                        <thead>
                                            <tr>
                                                <th style="min-width:100px"><strong>Preview</strong>
                                                </th><th style="min-width:150px"><strong>Label</strong>
                                                </th>
                                                <th><strong>Main image</strong>
                                                </th>
                                                <th><strong>Thumbnail</strong>
                                                </th>
                                                <th><strong>Gallery</strong>
                                                </th>
                                                <th class="text-center"><strong>Actions</strong>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="display: none;">
                                                <td style="width:20%">
                                                    <a href="assets/img/gallery/animal1.jpg" class="magnific" title="Nature 1">
                                                        <img src="assets/img/gallery/animal1.jpg" alt="animal1" class="img-responsive">
                                                    </a>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control m-t-10" value="Product 1 main image">
                                                </td>
                                                <td>
                                                    <div class=" ui-radio"><input type="radio" name="product1-main" value="1" class="m-t-10" checked=""></div>
                                                </td>
                                                <td>
                                                    <div class=" ui-radio"><input type="radio" name="product1-main" value="1" class="m-t-10"></div>
                                                </td>
                                                <td>
                                                    <div class=" ui-radio"><input type="radio" name="product1-main" value="1" class="m-t-10"></div>
                                                </td>
                                                <td class="text-center">
                                                    <a href="#" class="delete-img btn btn-sm btn-default m-t-10"><i class="fa fa-times-circle"></i> Remove</a>
                                                </td>
                                            </tr>
                                            <tr style="display: none;">
                                                <td style="width:20%">
                                                    <a href="assets/img/gallery/animal2.jpg" class="magnific" title="Nature 2">
                                                        <img src="assets/img/gallery/animal2.jpg" alt="animal2" class="img-responsive">
                                                    </a>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control m-t-10" value="Product 1 thumbnail">
                                                </td>
                                                <td>
                                                    <div class=" ui-radio"><input type="radio" name="product1-thumbnail" value="1" class="m-t-10"></div>
                                                </td>
                                                <td>
                                                    <div class=" ui-radio"><input type="radio" name="product1-thumbnail" value="1" class="m-t-10" checked=""></div>
                                                </td>
                                                <td>
                                                    <div class=" ui-radio"><input type="radio" name="product1-thumbnail" value="1" class="m-t-10"></div>
                                                </td>
                                                <td class="text-center">
                                                    <a href="#" class="delete-img btn btn-sm btn-default m-t-10"><i class="fa fa-times-circle"></i> Remove</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width:20%">
                                                    <a href="assets/img/gallery/animal3.jpg" class="magnific" title="Nature 3">
                                                        <img src="assets/img/gallery/animal3.jpg" alt="animal3" class="img-responsive">
                                                    </a>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control m-t-10" value="Product 1 gallery">
                                                </td>
                                                <td>
                                                    <div class=" ui-radio"><input type="radio" name="product1-gallery" value="1" class="m-t-10"></div>
                                                </td>
                                                <td>
                                                    <div class=" ui-radio"><input type="radio" name="product1-gallery" value="1" class="m-t-10"></div>
                                                </td>
                                                <td>
                                                    <div class=" ui-radio"><input type="radio" name="product1-gallery" value="1" class="m-t-10" checked=""></div>
                                                </td>
                                                <td class="text-center">
                                                    <a href="#" class="delete-img btn btn-sm btn-default m-t-10"><i class="fa fa-times-circle"></i> Remove</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="product_reviews">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-tools table-hover">
                                        <thead>
                                            <tr>
                                                <th style="min-width:70px"><strong>Review ID</strong>
                                                </th><th><strong>Review Date</strong>
                                                </th>
                                                <th><strong>User / Client</strong>
                                                </th>
                                                <th><strong>Review Content</strong>
                                                </th>
                                                <th class="text-center"><strong>Status</strong>
                                                </th>
                                                <th class="text-center"><strong>Actions</strong>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>03/11/2013</td>
                                                <td>John Addams</td>
                                                <td>Very good product. Low price. I like it a lot. Thanks! </td>
                                                <td class="text-center">
                                                    <span class="label label-success w-300">Approved</span>
                                                </td>
                                                <td class="text-center"> 
                                                    <a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
                                                    <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>02/11/2013</td>
                                                <td>Fred Aster</td>
                                                <td>I sell my car. Do you want to buy it?</td>
                                                <td class="text-center">
                                                    <span class="label label-danger w-300">Rejected</span>
                                                </td>
                                                <td class="text-center"> 
                                                    <a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
                                                    <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>01/11/2013</td>
                                                <td>Mike Johson</td>
                                                <td>I like this shirt. Quick delivery. </td>
                                                <td class="text-center">
                                                    <span class="label label-info w-300">Pending</span>
                                                </td>
                                                <td class="text-center"> 
                                                    <a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
                                                    <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>25/10/2013</td>
                                                <td>Amanda Taping</td>
                                                <td>Love it. </td>
                                                <td class="text-center">
                                                    <span class="label label-success w-300">Approved</span>
                                                </td>
                                                <td class="text-center"> 
                                                    <a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
                                                    <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>20/10/2013</td>
                                                <td>John Johnson</td>
                                                <td>Beautiful shirt</td>
                                                <td class="text-center">
                                                    <span class="label label-success w-300">Approved</span>
                                                </td>
                                                <td class="text-center"> 
                                                    <a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
                                                    <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@stop
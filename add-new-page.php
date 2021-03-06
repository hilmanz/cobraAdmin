
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Add New Page
            </header>
            <div class="panel-body">
                <div class="form">
                    <form action="#" class="cmxform form-horizontal" id="newpage">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Page Title</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder=""  class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label col-sm-2"> Content</label>
                            <div class="col-sm-10">
                                <textarea class="wysihtml5 form-control" rows="6" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label col-sm-2">Image Upload</label>
                            <div class="col-sm-10">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                               <span class="btn btn-white btn-file">
                                               <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                               <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                               <input type="file" class="default"  required/>
                                               </span>
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label col-sm-2">&nbsp;</label>
                            <div class="col-sm-10">
                                <button class="btn btn-primary" type="submit">Save</button>
                                <button class="btn btn-default" type="button">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>


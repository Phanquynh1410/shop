@include('admin.layout_1.header')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="d-flex">
                <h6 class = "col-10">Add new Category</h6>
                <a href="{{route('category.index')}}" type="submit" class="col-2 badge badge-sm btn btn-success bg-gradient-info">Return</a>
              </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">

                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="form-group">
                                <label for="" >Category Name</label>
                                <input type="text" class="form-control" placeholder="Enter Category Name...">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Category Name Parent</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                <option>1</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
@include('admin.layout_1.footer')
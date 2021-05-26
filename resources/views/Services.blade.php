@extends('Layouts.app')

@section('content')
<div id="mainDiv" class="container d-none">
    <div class="row">
        <div class="col-md-12 p-5">
            <table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                    <th class="th-sm">Image</th>
                    <th class="th-sm">Name</th>
                    <th class="th-sm">Description</th>
                    <th class="th-sm">Edit</th>
                    <th class="th-sm">Delete</th>
                    </tr>
                </thead>
                <tbody id="service_table">                
                    
                </tbody>
            </table>

        </div>
    </div>
</div>

<div id="loaderDiv" class="container">
    <div class="row">
        <div class="col-md-12 text-center p-5">
            <img class="m-5 loader_icon" src="{{ asset('images/loader.svg') }}" alt="">
        </div>
    </div>
</div>

<div id="wrongDiv" class="container d-none">
    <div class="row">
        <div class="col-md-12 m-5 text-center p-5">
            <h3>Something went Wrong !</h3>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" data-mdb-backdrop="static" data-mdb-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body text-center p-5">
        <h5 class="modal-title" id="staticBackdropLabel">Do you delete ?</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-mdb-dismiss="modal">
          No
        </button>
        <button data-id ="" id="deleteConfirmBtn" type="button" class="btn btn-sm btn-danger">Yes</button>
      </div>
    </div>
  </div>
</div>

@endsection

@section('script')

<script type="text/javascript">
    getServiceData();

    const myModal = document.getElementById('myModal');
    const myInput = document.getElementById('myInput');

    myModal.addEventListener('shown.mdb.modal', () => {
      myInput.focus()
    });
</script>

@endsection
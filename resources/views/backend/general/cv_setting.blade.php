
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <p class="text-white" style="font-size: 20px">Cv/Resume </p>
               
               
                <form id="myForm" method="post" action="{{ route('cv.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">                  
                       
                       
                        <div class="col-lg-12">                      
                            <div class="form-group mb-3">
                                <label for="copy_right_text" class="form-label">Upload Your CV (PDF file)</label>
                                <input type="file" name="cv_file" id="cv_file" class="form-control" placeholder="Cv pdf file Upload..."  style="padding:10px 5px">
                            </div>
                        </div>    
                       
                      <!-- end col --> 
                    </div>
                    <!-- end row-->
                    <div class="text-center ">                        
                        <button type="submit" class="btn btn-success waves-effect waves-light "><i class="mdi mdi-content-save"></i>Submit</button>                      
                    </div>
                </form>

            </div> <!-- end card-body -->
        </div> <!-- end card -->

    </div><!-- end col -->
</div>

<!-- end row -->

<div class="row">
    <div class="col-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <p class="text-white text-center" style="font-size: 20px">Website Banner and Title Information</p> 
                @php
                    $all_cv = App\Models\Cvfile::orderBy('id','DESC')->get();
                @endphp             

                <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th width="2%">SL</th>                           
                            <th>File Name</th> 
                            <th>Show PDF</th> 
                            <th>Upload Date</th>                           
                            <th>Status</th>
                                                      
                        </tr>
                    </thead>               
                    <tbody>
                        @foreach($all_cv as $key => $item)
                        <tr>
                            <td width="2%">{{ $key+1 }}</td>
                            
                            <td>{{ $item->cv_file }}</td>
                            <td><a href="{{ asset($item->cv_file) }}" class="btn btn-primary">Click</a></td>
                            <td>{{ Carbon\Carbon::parse($item->created_at)->format('m/d/Y') }}</td>
                            <td>
                                @if($item->status=='1')
                                <a href="{{ route('cv.inactive',$item->id) }}" class="badge rounded-pill p-2 " style="background: green;color:white;font-size:12px">Active</a>
                                @else
                                <a href="{{ route('cv.active',$item->id) }}" class="badge rounded-pill bg-danger p-2" style="font-size:12px;color:white">Deactive</a>
                                @endif
                            </td>
                           
                        </tr>
                        @endforeach

                    </tbody>
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>C-Hub</title>
</head>

<body>
    @include('layoutWarga.header')

    <div class="container m-10">
        <div class="row">
            <div class="col-xl">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl">
                                <div class="card">
                                    <div class="card-body">

                                        <form action="{{ route('laporan.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="pengirim" value="{{ auth()->user()->username }}">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Judul Laporan</label>
                                                <input type="text" name="judul" class="form-control"
                                                    id="exampleFormControlInput1">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Deskripsi Pengaduan</label>
                                                <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                            {{-- <div class="card-body">

                                                <label for="uploader">Upload Foto/Gambar Laporan</label>
                                                <div id="uploader" style="position: relative;"><div class="plupload_wrapper plupload_scroll"><div id="uploader_container" class="plupload_container" title="Using runtime: html5"><div class="plupload"><div class="plupload_header"><div class="plupload_header_content"><div class="plupload_header_title">Select files</div><div class="plupload_header_text">Add files to the upload queue and click the start button.</div></div></div><div class="plupload_content"><div class="plupload_filelist_header"><div class="plupload_file_name">Filename</div><div class="plupload_file_action">&nbsp;</div><div class="plupload_file_status"><span>Status</span></div><div class="plupload_file_size">Size</div><div class="plupload_clearer">&nbsp;</div></div><ul id="uploader_filelist" class="plupload_filelist" style="position: relative;"><li class="plupload_droptext">Drag files here.</li></ul><div class="plupload_filelist_footer"><div class="plupload_file_name"><div class="plupload_buttons"><a href="#" class="plupload_button plupload_add" id="uploader_browse" style="position: relative; z-index: 1;">Add Files</a><a href="#" class="plupload_button plupload_start plupload_disabled">Start Upload</a></div><span class="plupload_upload_status"></span></div><div class="plupload_file_action"></div><div class="plupload_file_status"><span class="plupload_total_status">0%</span></div><div class="plupload_file_size"><span class="plupload_total_file_size">0 b</span></div><div class="plupload_progress"><div class="plupload_progress_container"><div class="plupload_progress_bar"></div></div></div><div class="plupload_clearer">&nbsp;</div></div></div></div></div><input type="hidden" id="uploader_count" name="uploader_count" value="0"></div><div id="html5_1htogk3q51chq1ihn15p5of5o9f3_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 233px; left: 8px; width: 78px; height: 31px; overflow: hidden; z-index: 0;"><input id="html5_1htogk3q51chq1ihn15p5of5o9f3" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" multiple="" accept="image/jpeg,.jpg,image/gif,.gif,image/png,.png,application/zip,.zip"></div></div>
                                                <button style="margin-left: 85%; margin-top:50px" name="gambar" type="submit" class="btn btn-primary">Submit</button>
                                            </div> --}}
                                    </div>
                                    <div class="form-group ml-4">
                                        <label for="image">Upload Gambar</label>
                                        <input type="file" class="form-control-file" id="image" name="gambar">
                                    </div>
                                    <button style="margin-left: 85%; margin-top:50px" name="gambar" type="submit"
                                        class="btn btn-primary">Submit</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php   include 'header.php'; ?>


          <div class="section-header">
            <h1>Halaman Post</h1>
          </div>

          <div class="section-body">

              <div class="row">
                <div class="col-12">

                  <!-- form -->

                  <div class="card">
                    <div class="card-header">
                      <h4>Edit Materi</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" value="Judul yang akan di edit">
                      </div>

                      <div class="form-group">

                        <textarea id="summernote" name="editordata">Isi Materi yang akan di edit</textarea>

                      </div>


                      <div class="form-group">
                        <label>Kategory</label>
                        <select class="form-control" name="">
                          <option value="">Facebook Ads</option>
                          <option value="">Google Ads</option>
                          <option value="">Whatsapp Marketing</option>

                          </optgroup>
                        </select>
                      </div>

                      <div class="form-group">
                        <button class="btn btn-primary" type="submit" name="button">Simpan Perubahan</button>
                      </div>

                    </div>
                  </div>
                  <!-- akhir form -->


                </div>
                <!-- akhir col -->
              </div>
              <!-- akhir row -->
          </div>


<?php   include 'footer.php'; ?>

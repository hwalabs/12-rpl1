<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    />
    <title>Document</title>
  </head>
  <body>
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
        />
        <link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
        />
        <title>Document</title>
      </head>
      <body>
        <h3>Data Siswa</h3>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-sm-8 d-flex justify-content-center">
              <div class="card shadow-sm">
                <div class="card-body">
                  <div class="w-100">
                    <form action="">
                      <div class="mb-3 row align-items-center">
                        <label for="namaSiswa" class="col-sm-3 col-form-label"
                          >Nama Siswa</label
                        >
                        <div class="col-sm-8">
                          <input
                            type="text"
                            class="form-control"
                            id="namaSiswa"
                          />
                        </div>
                      </div>
                      <div class="mb-3 row align-items-center">
                        <label for="ttl" class="col-sm-3 col-form-label"
                          >Tempat Tanggal Lahir</label
                        >
                        <div class="col-sm-8">
                          <input type="date" class="form-control" id="ttl" />
                        </div>
                      </div>
                      <div class="mb-3 row align-items-center">
                        <label
                          for="jenisKelamin"
                          class="col-sm-3 col-form-label"
                          >Jenis Kelamin</label
                        >
                        <div class="col-sm-8">
                          <select
                            class="form-select"
                            aria-label="Default select example"
                          >
                            <option selected>Pilih Jenis Kelamin</option>
                            <option value="lakilaki">Laki-laki</option>
                            <option value="2">Perempuan</option>
                          </select>
                        </div>
                      </div>
                      <div class="mb-3 row align-items-center">
                        <label
                          for="jenisKelamin"
                          class="col-sm-3 col-form-label"
                          >Jurusan</label
                        >
                        <div class="col-sm-8">
                          <select
                            class="form-select"
                            aria-label="Default select example"
                          >
                            <option selected>Pilih Jurusan</option>
                            <option value="rpl">
                              Rekayasa Perangkat Lunak
                            </option>
                            <option value="tbsm">
                              Teknik Bisnis Sepeda Motor
                            </option>
                            <option value="atph">
                              Agribisnis Tanaman Pangan dan Hortikultura
                            </option>
                          </select>
                        </div>
                      </div>
                      <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary alig">
                          Submit
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </body>
    </html>
  </body>
</html>

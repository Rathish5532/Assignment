<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CRUD TABLE</title>
    <link rel="stylesheet" href="table.css" />

    <!-- bootstrap link -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <style>
      td{
        font-weight:bold      }
    </style>
  </head>
  <body>
    <div class="container-fluid mt-5">
      <div
        class="container-fluid mt-10"
        style="
          background-color: rgb(243, 248, 254);

          width: 100%;
          height: 10vh;
          display: flex;
          margin-top: -47px;
          padding-left: 250px;
        "
      >
        <h4><b>Master Records</b></h4>
        <div class="navbar-nav ms-auto">
          <h5 style="padding-right: 40px">Robert</h5>
          <p>Super Admin</p>
        </div>
        <img
          width="40"
          height="40"
          src="https://img.icons8.com/office/16/school-director-male-skin-type-3.png"
          alt="school-director-male-skin-type-3"
        />
      </div>
      <div class="row" style=" background-color: rgb(243, 248, 254);" >
        <div class="col-md-12">
          <div class="row">
            <div class="d-flex col-md-6 mt-5" style="padding-left: 300px; " >
              <a
                class="btn"
                type="search"
                href="#"
                placeholder="search any keywords"
                style="border-radius:10px ; width: 300px;background-color:white;padding-right:120px "

              >
                <i class="bi bi-search"></i>Search any keywords</a
              >
            </div>
            <div class="col-md-6 mt-5">
              <div style="float: right">
                <a
                  href="#"
                  class="btn"
                  style="color: rgb(11, 149, 124); border: 1px solid"
                  ><i class="bi bi-upload"></i>Sample Document</a
                >
                <a
                  href="#"
                  class="btn"
                  style="color: rgb(11, 149, 124); border: 1px solid"
                  ><i class="bi bi-plus"></i>Import</a
                >
                <a
                  href="#"
                  class="btn"
                  style="
                    background-color: rgb(11, 149, 124);
                    color: white;
                    border: 1px solid;
                  "
                  ><i class="bi bi-plus"></i>Add</a
                >
              </div>
            </div>
          </div>
          <div class="row" style="padding-left: 300px">
            <div class="col-md-12 mt-4 table-responsive">
              <table class="table table-bordered  " >
                <thead
                  class="table table-bordered"
                  style="background-color: rgb(255, 247, 245)"
                >
                  <tr>
                    <th style="color: rgb(253, 101, 51)">| Source Type ↑</th>
                    <th style="color: rgb(253, 101, 51)">| Name ↑</th>
                    <th style="color: rgb(253, 101, 51)">| Action ↑</th>
                  </tr>
                </thead>
                <tbody style="background-color:white">
                  <tr>
                    <td>Product</td>
                    <td>Face Wash</td>
                    <td>
                      <a href="#" class="link-warning"
                        ><i class="bi bi-pencil-fill fs-5 me-3"></i
                      ></a>
                      <a href="#" class="link-danger"
                        ><i class="bi bi-trash fs-5"></i
                      ></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Product</td>
                    <td>Face Wash</td>
                    <td>
                      <a href="#" class="link-warning"
                        ><i class="bi bi-pencil-fill fs-5 me-3"></i
                      ></a>
                      <a href="#" class="link-danger"
                        ><i class="bi bi-trash fs-5"></i
                      ></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Product</td>
                    <td>Face Wash</td>
                    <td>
                      <a href="#" class="link-warning"
                        ><i class="bi bi-pencil-fill fs-5 me-3"></i
                      ></a>
                      <a href="#" class="link-danger"
                        ><i class="bi bi-trash fs-5"></i
                      ></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Product</td>
                    <td>Face Wash</td>
                    <td>
                      <a href="#" class="link-warning"
                        ><i class="bi bi-pencil-fill fs-5 me-3"></i
                      ></a>
                      <a href="#" class="link-danger"
                        ><i class="bi bi-trash fs-5"></i
                      ></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Product</td>
                    <td>Face Wash</td>
                    <td>
                      <a href="#" class="link-warning"
                        ><i class="bi bi-pencil-fill fs-5 me-3"></i
                      ></a>
                      <a href="#" class="link-danger"
                        ><i class="bi bi-trash fs-5"></i
                      ></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Product</td>
                    <td>Face Wash</td>
                    <td>
                      <a href="#" class="link-warning"
                        ><i class="bi bi-pencil-fill fs-5 me-3"></i
                      ></a>
                      <a href="#" class="link-danger"
                        ><i class="bi bi-trash fs-5"></i
                      ></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Product</td>
                    <td>Face Wash</td>
                    <td>
                      <a href="#" class="link-warning"
                        ><i class="bi bi-pencil-fill fs-5 me-3"></i
                      ></a>
                      <a href="#" class="link-danger"
                        ><i class="bi bi-trash fs-5"></i
                      ></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Product</td>
                    <td>Face Wash</td>
                    <td>
                      <a href="#" class="link-warning"
                        ><i class="bi bi-pencil-fill fs-5 me-3"></i
                      ></a>
                      <a href="#" class="link-danger"
                        ><i class="bi bi-trash fs-5"></i
                      ></a>
                    </td>
                  </tr>
                  <!-- Add more table rows here -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

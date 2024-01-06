@extends('layouts.main')
@section('title','Index')
@push('internalCss')
<style>
</style>
@endpush

@push('bodycontent')
<div class="card shadow-none position-relative overflow-hidden mb-4">
  <div class="card-body d-flex align-items-center justify-content-between p-4">
    <h4 class="fw-semibold mb-0">All Students</h4>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
          <a class="text-muted text-decoration-none" href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item" aria-current="page">All Students</li>
      </ol>
    </nav>
  </div>
</div>
<div class="card">
<div class="card-body">
    <div class="mb-4 pb-2 align-items-center">
    <h5 class="mb-0">All Students Data</h5>
    </div>
    <div class="table-responsive pb-4">
    <table id="all-student" class="table table-striped table-bordered border text-nowrap align-middle">
        <thead>
        <!-- start row -->
        <tr>
            <th>Profile</th>
            <th>Sec.</th>
            <th>Parents</th>
            <th>D.O.B.</th>
            <th>Phone</th>
            <th>Email</th>
            <th></th>
        </tr>
        <!-- end row -->
        </thead>
        <tbody>
        <!-- start row -->
        <tr>
            <td>
            <div class="d-flex align-items-center">
                <div class="me-4">
                <img src="../assets/images/profile/user-1.jpg" alt="" class="rounded-circle" width="45" />
                </div>

                <div>
                <h6 class="mb-1">Mark J. Freeman</h6>
                <p class="fs-3 mb-0">Class: 2</p>
                </div>
            </div>
            </td>
            <td>A</td>
            <td>Jack Sparrow</td>
            <td>25/05/2012</td>
            <td>+ 123 9988568</td>
            <td>k93@gmail.com</td>
            <td>
            <a href="student-details.html" class="link-primary" data-bs-toggle="tooltip"
                data-bs-placement="top" title="View Details">
                <i class="ti ti-eye fs-7"></i>
            </a>
            </td>
        </tr>
        <!-- end row -->
        <!-- start row -->
        <tr>
            <td>
            <div class="d-flex align-items-center">
                <div class="me-4">
                <img src="../assets/images/profile/user-2.jpg" alt="" class="rounded-circle" width="45" />
                </div>

                <div>
                <h6 class="mb-1">Nirav Joshi</h6>
                <p class="fs-3 mb-0">Class: 12</p>
                </div>
            </div>
            </td>
            <td>B</td>
            <td>Joshi David</td>
            <td>12/12/2001</td>
            <td>+ 123 9988568</td>
            <td>d93@gmail.com</td>
            <td>
            <a href="student-details.html" class="link-primary" data-bs-toggle="tooltip"
                data-bs-placement="top" title="View Details">
                <i class="ti ti-eye fs-7"></i>
            </a>
            </td>
        </tr>
        <!-- end row -->
        <!-- start row -->
        <tr>
            <td>
            <div class="d-flex align-items-center">
                <div class="me-4">
                <img src="../assets/images/profile/user-3.jpg" alt="" class="rounded-circle" width="45" />
                </div>

                <div>
                <h6 class="mb-1">Garima Singh</h6>
                <p class="fs-3 mb-0">Class: 5</p>
                </div>
            </div>
            </td>
            <td>B</td>
            <td>Ronaldo Singh</td>
            <td>20/10/2007</td>
            <td>+ 123 9988568</td>
            <td>r93@gmail.com</td>
            <td>
            <a href="student-details.html" class="link-primary" data-bs-toggle="tooltip"
                data-bs-placement="top" title="View Details">
                <i class="ti ti-eye fs-7"></i>
            </a>
            </td>
        </tr>
        <!-- end row -->
        <!-- start row -->
        <tr>
            <td>
            <div class="d-flex align-items-center">
                <div class="me-4">
                <img src="../assets/images/profile/user-4.jpg" alt="" class="rounded-circle" width="45" />
                </div>

                <div>
                <h6 class="mb-1">Mark Willy</h6>
                <p class="fs-3 mb-0">Class: 5</p>
                </div>
            </div>
            </td>
            <td>c</td>
            <td>Jack Sparrow</td>
            <td>26/01/2006</td>
            <td>+ 123 9988568</td>
            <td>j93@gmail.com</td>
            <td>
            <a href="student-details.html" class="link-primary" data-bs-toggle="tooltip"
                data-bs-placement="top" title="View Details">
                <i class="ti ti-eye fs-7"></i>
            </a>
            </td>
        </tr>
        <!-- end row -->
        <!-- start row -->
        <tr>
            <td>
            <div class="d-flex align-items-center">
                <div class="me-4">
                <img src="../assets/images/profile/user-5.jpg" alt="" class="rounded-circle" width="45" />
                </div>

                <div>
                <h6 class="mb-1">John Deo</h6>
                <p class="fs-3 mb-0">Class: 12</p>
                </div>
            </div>
            </td>
            <td>c</td>
            <td>John Doe</td>
            <td>02/10/2001</td>
            <td>+ 123 9988568</td>
            <td>p93@gmail.com</td>
            <td>
            <a href="student-details.html" class="link-primary" data-bs-toggle="tooltip"
                data-bs-placement="top" title="View Details">
                <i class="ti ti-eye fs-7"></i>
            </a>
            </td>
        </tr>
        <!-- end row -->
        <!-- start row -->
        <tr>
            <td>
            <div class="d-flex align-items-center">
                <div class="me-4">
                <img src="../assets/images/profile/user-1.jpg" alt="" class="rounded-circle" width="45" />
                </div>

                <div>
                <h6 class="mb-1">Yui Rio</h6>
                <p class="fs-3 mb-0">Class: 2</p>
                </div>
            </div>
            </td>
            <td>A</td>
            <td>Jack Sparrow</td>
            <td>25/05/2012</td>
            <td>+ 123 9988568</td>
            <td>k93@gmail.com</td>
            <td>
            <a href="student-details.html" class="link-primary" data-bs-toggle="tooltip"
                data-bs-placement="top" title="View Details">
                <i class="ti ti-eye fs-7"></i>
            </a>
            </td>
        </tr>
        <!-- end row -->
        <!-- start row -->
        <tr>
            <td>
            <div class="d-flex align-items-center">
                <div class="me-4">
                <img src="../assets/images/profile/user-2.jpg" alt="" class="rounded-circle" width="45" />
                </div>

                <div>
                <h6 class="mb-1">Yuna Hina</h6>
                <p class="fs-3 mb-0">Class: 12</p>
                </div>
            </div>
            </td>
            <td>B</td>
            <td>Joshi David</td>
            <td>12/12/2001</td>
            <td>+ 123 9988568</td>
            <td>d93@gmail.com</td>
            <td>
            <a href="student-details.html" class="link-primary" data-bs-toggle="tooltip"
                data-bs-placement="top" title="View Details">
                <i class="ti ti-eye fs-7"></i>
            </a>
            </td>
        </tr>
        <!-- end row -->
        <!-- start row -->
        <tr>
            <td>
            <div class="d-flex align-items-center">
                <div class="me-4">
                <img src="../assets/images/profile/user-3.jpg" alt="" class="rounded-circle" width="45" />
                </div>

                <div>
                <h6 class="mb-1">Koharu Hinata</h6>
                <p class="fs-3 mb-0">Class: 5</p>
                </div>
            </div>
            </td>
            <td>B</td>
            <td>Ronaldo Singh</td>
            <td>20/10/2007</td>
            <td>+ 123 9988568</td>
            <td>r93@gmail.com</td>
            <td>
            <a href="student-details.html" class="link-primary" data-bs-toggle="tooltip"
                data-bs-placement="top" title="View Details">
                <i class="ti ti-eye fs-7"></i>
            </a>
            </td>
        </tr>
        <!-- end row -->
        <!-- start row -->
        <tr>
            <td>
            <div class="d-flex align-items-center">
                <div class="me-4">
                <img src="../assets/images/profile/user-4.jpg" alt="" class="rounded-circle" width="45" />
                </div>

                <div>
                <h6 class="mb-1">Mei Mio</h6>
                <p class="fs-3 mb-0">Class: 10</p>
                </div>
            </div>
            </td>
            <td>c</td>
            <td>Jack Sparrow</td>
            <td>26/01/2004</td>
            <td>+ 123 9988568</td>
            <td>m93@gmail.com</td>
            <td>
            <a href="student-details.html" class="link-primary" data-bs-toggle="tooltip"
                data-bs-placement="top" title="View Details">
                <i class="ti ti-eye fs-7"></i>
            </a>
            </td>
        </tr>
        <!-- end row -->
        <!-- start row -->
        <tr>
            <td>
            <div class="d-flex align-items-center">
                <div class="me-4">
                <img src="../assets/images/profile/user-5.jpg" alt="" class="rounded-circle" width="45" />
                </div>

                <div>
                <h6 class="mb-1">Saki Miyu</h6>
                <p class="fs-3 mb-0">Class: 6</p>
                </div>
            </div>
            </td>
            <td>A</td>
            <td>John Doe</td>
            <td>06/07/2007</td>
            <td>+ 123 9988568</td>
            <td>s93@gmail.com</td>
            <td>
            <a href="student-details.html" class="link-primary" data-bs-toggle="tooltip"
                data-bs-placement="top" title="View Details">
                <i class="ti ti-eye fs-7"></i>
            </a>
            </td>
        </tr>
        <!-- end row -->
        <!-- start row -->
        <tr>
            <td>
            <div class="d-flex align-items-center">
                <div class="me-4">
                <img src="../assets/images/profile/user-6.jpg" alt="" class="rounded-circle" width="45" />
                </div>

                <div>
                <h6 class="mb-1">Kokona Haruka</h6>
                <p class="fs-3 mb-0">Class: 2</p>
                </div>
            </div>
            </td>
            <td>A</td>
            <td>Jack Sparrow</td>
            <td>25/05/2012</td>
            <td>+ 123 9988568</td>
            <td>k93@gmail.com</td>
            <td>
            <a href="student-details.html" class="link-primary" data-bs-toggle="tooltip"
                data-bs-placement="top" title="View Details">
                <i class="ti ti-eye fs-7"></i>
            </a>
            </td>
        </tr>
        <!-- end row -->
        <!-- start row -->
        <tr>
            <td>
            <div class="d-flex align-items-center">
                <div class="me-4">
                <img src="../assets/images/profile/user-7.jpg" alt="" class="rounded-circle" width="45" />
                </div>

                <div>
                <h6 class="mb-1">Haruto Yuto</h6>
                <p class="fs-3 mb-0">Class: 12</p>
                </div>
            </div>
            </td>
            <td>B</td>
            <td>Joshi David</td>
            <td>12/12/2001</td>
            <td>+ 123 9988568</td>
            <td>d93@gmail.com</td>
            <td>
            <a href="student-details.html" class="link-primary" data-bs-toggle="tooltip"
                data-bs-placement="top" title="View Details">
                <i class="ti ti-eye fs-7"></i>
            </a>
            </td>
        </tr>
        <!-- end row -->
        <!-- start row -->
        <tr>
            <td>
            <div class="d-flex align-items-center">
                <div class="me-4">
                <img src="../assets/images/profile/user-8.jpg" alt="" class="rounded-circle" width="45" />
                </div>

                <div>
                <h6 class="mb-1">Sota Yuki</h6>
                <p class="fs-3 mb-0">Class: 5</p>
                </div>
            </div>
            </td>
            <td>B</td>
            <td>Ronaldo Singh</td>
            <td>20/10/2007</td>
            <td>+ 123 9988568</td>
            <td>r93@gmail.com</td>
            <td>
            <a href="student-details.html" class="link-primary" data-bs-toggle="tooltip"
                data-bs-placement="top" title="View Details">
                <i class="ti ti-eye fs-7"></i>
            </a>
            </td>
        </tr>
        <!-- end row -->
        <!-- start row -->
        <tr>
            <td>
            <div class="d-flex align-items-center">
                <div class="me-4">
                <img src="../assets/images/profile/user-1.jpg" alt="" class="rounded-circle" width="45" />
                </div>

                <div>
                <h6 class="mb-1">Hayato Haruki</h6>
                <p class="fs-3 mb-0">Class: 5</p>
                </div>
            </div>
            </td>
            <td>c</td>
            <td>Jack Sparrow</td>
            <td>26/01/2006</td>
            <td>+ 123 9988568</td>
            <td>j93@gmail.com</td>
            <td>
            <a href="student-details.html" class="link-primary" data-bs-toggle="tooltip"
                data-bs-placement="top" title="View Details">
                <i class="ti ti-eye fs-7"></i>
            </a>
            </td>
        </tr>
        <!-- end row -->
        <!-- start row -->
        <tr>
            <td>
            <div class="d-flex align-items-center">
                <div class="me-4">
                <img src="../assets/images/profile/user-2.jpg" alt="" class="rounded-circle" width="45" />
                </div>

                <div>
                <h6 class="mb-1">Ryusei Koki</h6>
                <p class="fs-3 mb-0">Class: 12</p>
                </div>
            </div>
            </td>
            <td>c</td>
            <td>John Doe</td>
            <td>02/10/2001</td>
            <td>+ 123 9988568</td>
            <td>p93@gmail.com</td>
            <td>
            <a href="student-details.html" class="link-primary" data-bs-toggle="tooltip"
                data-bs-placement="top" title="View Details">
                <i class="ti ti-eye fs-7"></i>
            </a>
            </td>
        </tr>
        <!-- end row -->
        <!-- start row -->
        <tr>
            <td>
            <div class="d-flex align-items-center">
                <div class="me-4">
                <img src="../assets/images/profile/user-3.jpg" alt="" class="rounded-circle" width="45" />
                </div>

                <div>
                <h6 class="mb-1">Sora Sosuke</h6>
                <p class="fs-3 mb-0">Class: 2</p>
                </div>
            </div>
            </td>
            <td>A</td>
            <td>Jack Sparrow</td>
            <td>25/05/2012</td>
            <td>+ 123 9988568</td>
            <td>k93@gmail.com</td>
            <td>
            <a href="student-details.html" class="link-primary" data-bs-toggle="tooltip"
                data-bs-placement="top" title="View Details">
                <i class="ti ti-eye fs-7"></i>
            </a>
            </td>
        </tr>
        <!-- end row -->
        <!-- start row -->
        <tr>
            <td>
            <div class="d-flex align-items-center">
                <div class="me-4">
                <img src="../assets/images/profile/user-4.jpg" alt="" class="rounded-circle" width="45" />
                </div>

                <div>
                <h6 class="mb-1">Riku Soma</h6>
                <p class="fs-3 mb-0">Class: 12</p>
                </div>
            </div>
            </td>
            <td>B</td>
            <td>Joshi David</td>
            <td>12/12/2001</td>
            <td>+ 123 9988568</td>
            <td>d93@gmail.com</td>
            <td>
            <a href="student-details.html" class="link-primary" data-bs-toggle="tooltip"
                data-bs-placement="top" title="View Details">
                <i class="ti ti-eye fs-7"></i>
            </a>
            </td>
        </tr>
        <!-- end row -->
        <!-- start row -->
        <tr>
            <td>
            <div class="d-flex align-items-center">
                <div class="me-4">
                <img src="../assets/images/profile/user-5.jpg" alt="" class="rounded-circle" width="45" />
                </div>

                <div>
                <h6 class="mb-1">Pippi Osu</h6>
                <p class="fs-3 mb-0">Class: 5</p>
                </div>
            </div>
            </td>
            <td>B</td>
            <td>Ronaldo Singh</td>
            <td>20/10/2007</td>
            <td>+ 123 9988568</td>
            <td>r93@gmail.com</td>
            <td>
            <a href="student-details.html" class="link-primary" data-bs-toggle="tooltip"
                data-bs-placement="top" title="View Details">
                <i class="ti ti-eye fs-7"></i>
            </a>
            </td>
        </tr>
        <!-- end row -->
        <!-- start row -->
        <tr>
            <td>
            <div class="d-flex align-items-center">
                <div class="me-4">
                <img src="../assets/images/profile/user-1.jpg" alt="" class="rounded-circle" width="45" />
                </div>

                <div>
                <h6 class="mb-1">Ryuto Ippongo</h6>
                <p class="fs-3 mb-0">Class: 10</p>
                </div>
            </div>
            </td>
            <td>c</td>
            <td>Jack Sparrow</td>
            <td>26/01/2004</td>
            <td>+ 123 9988568</td>
            <td>m93@gmail.com</td>
            <td>
            <a href="student-details.html" class="link-primary" data-bs-toggle="tooltip"
                data-bs-placement="top" title="View Details">
                <i class="ti ti-eye fs-7"></i>
            </a>
            </td>
        </tr>
        <!-- end row -->
        <!-- start row -->
        <tr>
            <td>
            <div class="d-flex align-items-center">
                <div class="me-4">
                <img src="../assets/images/profile/user-2.jpg" alt="" class="rounded-circle" width="45" />
                </div>

                <div>
                <h6 class="mb-1">Midori Gurin</h6>
                <p class="fs-3 mb-0">Class: 6</p>
                </div>
            </div>
            </td>
            <td>A</td>
            <td>John Doe</td>
            <td>06/07/2007</td>
            <td>+ 123 9988568</td>
            <td>s93@gmail.com</td>
            <td>
            <a href="student-details.html" class="link-primary" data-bs-toggle="tooltip"
                data-bs-placement="top" title="View Details">
                <i class="ti ti-eye fs-7"></i>
            </a>
            </td>
        </tr>
        <!-- end row -->
        </tbody>
    </table>
    </div>
</div>
</div>
@endpush

@push('javascript')
<script>

</script>
@endpush

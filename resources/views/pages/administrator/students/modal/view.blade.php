<div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Student Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div id="user" class="container profile">
              <div class="row">
                <div class="col text-center mt-3 px-5">
                  <img src="{{ asset('images/default.jpg') }}" class="rounded img-thumbnail" style="width: 200px; height: auto;" id="avatar" />
                  <h2 class="mt-3" id="name"></h2>
                </div>
              </div>
            
              <div class="row mt-2">
                <div class="col">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</button>
                    </li>
                    <li class="nav-item">
                      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                    </li>
                    <li class="nav-item">
                      <button class="nav-link" id="address-tab" data-bs-toggle="tab" data-bs-target="#classes" role="tab" aria-controls="classes" aria-selected="false">Classes</button>
                    </li>
                    <li class="nav-item">
                      <button class="nav-link" id="links-tab" data-bs-toggle="tab" data-bs-target="#attendance" role="tab" aria-controls="attendance" aria-selected="false">Recent Attendance</button>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                      <table class="table table-hover table-sm table-properties">
                        <tr>
                          <th>Name</th>
                          <td id="name"></td>
                        </tr>
                        <tr>
                          <th>Year</th>
                          <td id="year"></td>
                        </tr>
                        <tr>
                          <th>Gender</th>
                          <td id="gender"></td>
                        </tr>
                        <tr>
                          <th>Date of Birth</th>
                          <td id="dob"></td>
                        </tr>
                        <tr>
                          <th>Programme</th>
                          <td id="programme"></td>
                        </tr>
                        <tr>
                          <th>Minor</th>
                          <td id="minor"></td>
                        </tr>
                      </table>
                    </div>
            
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                      <table class="table table-hover table-sm table-properties">
                        <tr>
                          <th>Email</th>
                          <td id="email"></td>
                        </tr>
                        <tr>
                          <th>Address</th>
                          <td id="address"></td>
                        </tr>
                        <tr>
                          <th>Phone Number</th>
                          <td id="phone"></td>
                        </tr>
                      </table>
                    </div>
            
                    <div class="tab-pane fade" id="classes" role="tabpanel" aria-labelledby="classes-tab">
                      <table class="table table-hover table-sm table-properties" id="class-table">
                        <tr>
                          <td class="text-center">No record</td>
                        </tr>
                      </table>
                    </div>
            
                    <div class="tab-pane fade" id="attendance" role="tabpanel" aria-labelledby="attendance-tab">
                      <table class="table table-hover table-sm table-properties" id="attendance-table">
                        <tr>
                          <td class="text-center">No record</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
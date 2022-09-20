<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create new student</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="form" data-id="create">
            @csrf
            <div class="row mt-2">
              <div class="col">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
            </div>
              
            <div class="row mt-2">
              <div class="col">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email">
              </div>
              <div class="col">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control" id="password" name="password">
              </div>
            </div>

            <div class="row mt-2">
              <div class="col">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone">
              </div>
              <div class="col">
                <label for="year" class="form-label">Year</label>
                <input type="text" class="form-control" id="year" name="year">
              </div>
            </div>

            <div class="row mt-2">
              <div class="col">
                <label for="date_of_birth" class="form-label">Date of Birth</label>
                <input type="text" class="form-control" id="date_of_birth" name="date_of_birth">
              </div>
              <div class="col">
                <label for="gender" class="form-label">Gender</label>
                <div style="padding: 6px 12px;">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                    <label class="form-check-label" for="male">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                    <label class="form-check-label" for="female">Female</label>
                  </div>
                </div>
              </div>
            </div>
              
            <div class="row mt-2">
              <div class="col">
                <label for="address" class="form-label">Address</label>
                <textarea id="address" name="address" rows="4" cols="50" class="form-control" style="resize: none;"></textarea>
              </div>
            </div>

            <div class="row mt-2">
              <div class="col">
                <label for="programme" class="form-label">Programme</label>
                <input type="text" class="form-control" id="programme" name="programme">
              </div>
              <div class="col">
                <label for="minor" class="form-label">Minor</label>
                <input type="text" class="form-control" id="minor" name="minor">
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
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
            <div class="form-group">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
              <label for="name" class="form-label">Email</label>
              <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="name" class="form-label">Password</label>
              <input type="text" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
              <label for="name" class="form-label">Phone</label>
              <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <div class="form-group">
              <label for="name" class="form-label">Year</label>
              <input type="text" class="form-control" id="year" name="year">
            </div>
            <div class="form-group">
              <label for="name" class="form-label">Gender</label>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="male">
                <label class="form-check-label" for="inlineRadio1">Male</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="female">
                <label class="form-check-label" for="inlineRadio2">Female</label>
              </div>
            </div>
            <div class="form-group">
              <label for="name" class="form-label">Date of Birth</label>
              <input type="text" class="form-control" id="date_of_birth" name="date_of_birth">
            </div>
            <div class="form-group">
              <label for="name" class="form-label">Address</label>
              <textarea id="address" name="address" rows="4" cols="50">
            </div>
            <div class="form-group">
              <label for="name" class="form-label">Programme</label>
              <input type="text" class="form-control" id="programme" name="programme">
            </div>
            <div class="form-group">
              <label for="name" class="form-label">Minor</label>
              <input type="text" class="form-control" id="minor" name="minor">
            </div>
          </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
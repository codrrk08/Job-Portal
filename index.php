<?php include 'header.php' ?>

       <div class="content">
        <p>
          <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" value="button">Post Job</button>
        </p>
          <div class="collapse" id="collapseExample">
            <div class="card card-body">
              <!-- collapsable form -->
            <form>
              <div class="mb-3">
                <label for="Company Name" class="form-label">Company Name</label>
                <input type="Text" class="form-control" id="" >
              </div>
              <div class="mb-3">
                <label for="Position" class="form-label">Position</label>
                <input type="text" class="form-control" id="Position">
              </div>
              <div class="mb-3">
                <label for="JobDesc" class="form-label">Job Description</label>
                <input type="text" class="form-control" id="JobDesc">
              </div>
              <div class="mb-3">
                <label for="CTC" class="form-label">CTC</label>
                <input type="text" class="form-control" id="CTC">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
           <!--  -->
            </div>
          </div>
          <!-- Job Table -->
          <div class="table">
            <table id="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Company Name</th>
                  <th scope="col">Position</th>
                  <th scope="col">CTC</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Cognizant</td>
                  <td>Software Developer</td>
                  <td>9 LPA</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Infosys</td>
                  <td>UX Designer</td>
                  <td>11 LPA</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Microsoft</td>
                  <td>Cloud Engineer</td>
                  <td>12-15 LPA</td>
                </tr>
              </tbody>
            </table>
          </div>


                

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    </body>
</html>
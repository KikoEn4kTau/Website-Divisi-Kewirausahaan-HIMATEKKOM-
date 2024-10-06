



<div class="container mt-4">
    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-8">
            <!-- New Post Form -->
            <div class="post-card">
                <h5>Create a New Post</h5>
                <form id="newPostForm">
                    <div class="mb-3">
                        <label for="postContent" class="form-label">Post Content</label>
                        <textarea class="form-control" id="postContent" rows="3" placeholder="What's on your mind?"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Post</button>
                </form>
            </div>

            <!-- Posts will be added here dynamically -->
            <div id="postList">
                <!-- Post 1 -->
                <div class="post-card">
                    <div class="d-flex align-items-start">
                        <img src="https://via.placeholder.com/40" class="rounded-circle me-2" alt="User Avatar">
                        <div>
                            <h6>Lorem Ipsum Dolor</h6>
                            <small>1 day ago</small>
                            <p>Hi, there! This is an app that allows users to search for recipes while keeping their health in check. The design of this app makes it easy for everyone to find different recipes of their choice along wit ... <a href="#">view more</a></p>
                            <img src="https://via.placeholder.com/600x300" class="img-fluid" alt="Post Image">
                            <div class="d-flex justify-content-between mt-2">
                                <div>
                                    <a href="#" class="me-3"><i class="bi bi-heart"></i> Like</a>
                                    <a href="#" class="me-3"><i class="bi bi-chat"></i> Comment</a>
                                    <a href="#"><i class="bi bi-bookmark"></i> Save</a>
                                </div>
                                <a href="#"><i class="bi bi-share"></i> Share</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Post 2 -->
                <div class="post-card">
                    <div class="d-flex align-items-start">
                        <img src="https://via.placeholder.com/40" class="rounded-circle me-2" alt="User Avatar">
                        <div>
                            <h6>Lorem Ipsum Dolor</h6>
                            <small>1 day ago</small>
                            <p>Hi, there! This is an app that allows users to search for recipes while keeping their health in check. The design of this app makes it easy for everyone to find different recipes of their choice along wit ... <a href="#">view more</a></p>
                            <img src="https://via.placeholder.com/600x300" class="img-fluid" alt="Post Image">
                            <div class="d-flex justify-content-between mt-2">
                                <div>
                                    <a href="#" class="me-3"><i class="bi bi-heart"></i> Like</a>
                                    <a href="#" class="me-3"><i class="bi bi-chat"></i> Comment</a>
                                    <a href="#"><i class="bi bi-bookmark"></i> Save</a>
                                </div>
                                <a href="#"><i class="bi bi-share"></i> Share</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <!-- Popular Tags -->
            <div class="popular-tags mb-4">
                <h6>Popular Tags</h6>
                <a href="#" class="d-block mb-2">#design</a>
                <a href="#" class="d-block mb-2">#travel</a>
                <a href="#" class="d-block mb-2">#javascript</a>
                <a href="#" class="d-block mb-2">#food</a>
                <a href="#" class="d-block">#health</a>
            </div>
        </div>
    </div>
</div>


<!-- JavaScript to handle new post submission -->
<script>
    const newPostForm = document.getElementById('newPostForm');
    const postList = document.getElementById('postList');

    newPostForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const postContent = document.getElementById('postContent').value;

        if (postContent.trim()) {
            const newPostHTML = `
          <div class="post-card">
            <div class="d-flex align-items-start">
              <img src="https://via.placeholder.com/40" class="rounded-circle me-2" alt="User Avatar">
              <div>
                <h6>New User</h6>
                <small>Just now</small>
                <p>${postContent}</p>
                <div class="d-flex justify-content-between mt-2">
                  <div>
                    <a href="#" class="me-3"><i class="bi bi-heart"></i> Like</a>
                    <a href="#" class="me-3"><i class="bi bi-chat"></i> Comment</a>
                    <a href="#"><i class="bi bi-bookmark"></i> Save</a>
                  </div>
                  <a href="#"><i class="bi bi-share"></i> Share</a>
                </div>
              </div>
            </div>
          </div>
        `;

            postList.insertAdjacentHTML('afterbegin', newPostHTML);
            newPostForm.reset();
        }
    });
</script>
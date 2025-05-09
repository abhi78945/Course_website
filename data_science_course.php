<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frontend Development Course</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom css link -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Add custom styles specific to the course details page if needed */
        .enroll-btn {
            display: block;
            width: 150px; /* Adjust width as needed */
            margin: 20px 0 0 20px; /* Add margin to the top and left */
            background-color: #0631c0;
            color: white;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Course details section -->
    <section class="course-details">
        <h1>Data Science Course</h1>
        <p>Data science covers various aspects of data analysis, interpretation, and application. </p>
        
        <!-- Add more details as needed -->
        <a href="enroll.php" class="btn enroll-btn">Enroll Now</a>
    </section>
    <style>
        /* CSS styles */
        h1 {
            margin-bottom: 20px; /* Add margin-bottom to create space between h1 and p */
        }
    </style>



   
    <!-- Enroll Now button and video -->
    
        <div class="course-video">
            <h2>Course Introduction</h2>
            <video controls width="640" height="360">
                <source src="videos/ds.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-details">
                <div class="description">
                    <h3>Description</h3>
                    <p>A data science course offers comprehensive training in the fundamental principles, techniques, and tools required to analyze, interpret, and derive insights from complex datasets. Covering areas such as data cleaning, exploratory analysis, machine learning, and statistical modeling, this course equips students with the skills to extract actionable intelligence, build predictive models, and make data-driven decisions across various domains and industries.</p>
                </div>
                <style>
                    /* CSS styles */
                    p {
                        margin-bottom: 4px; /* Add margin-bottom to create space between paragraphs */
                        font-size: 12px;
                    }
                    h3{
                        margin-bottom: 20px;
                    }
                </style>
                <div class="notes">
                    <h3>Notes</h3>
                    <textarea placeholder="Write your notes here..." rows="5" cols="40"></textarea>
                </div>
                <div class="team-section">
                    <div class="team-menu">
                        <button id="team-menu-btn">Team Members</button>

                            <button id="add-member-button">Add Member</button>
                        
                        
                    </div>
                    <div id="add-members-popup" class="add-members-popup" style="display: none;">
                        <input type="email" id="email-input" placeholder="Enter email">
                        <button id="add-member-submit">Add</button>
                    </div>
                    <ul id="team-members-list">
                        <!-- Team members will be listed here -->
                    </ul>
                    
                </div>
                
                
            </div>
            <div class="sample-certificate">
                 
                <a href="certificates.html" target="_blank" class="btn-sample-certificate">Sample Certificate</a>
                

            </div>

            
            
        </div>
    
</section>
<style>
    .course-video {
        margin-left: 100px;
    }
    #add-member-button {
            background-color: #525353; /* Blue color */
            color: white;
            border: none;
            border-radius: 4px;
            padding: 5px;
            cursor: pointer;
            font-size: 14px;
            margin-top: 10px; /* Add margin to the top */
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
</style>

<script>const addMemberButton = document.getElementById("add-member-button");

    addMemberButton.addEventListener("click", function() {
        const email = prompt("Please enter the email address of the team member:");

        if (email !== null && email !== "") {
            const teamMembersList = document.getElementById("team-members-list");
            const listItem = document.createElement("li");
            listItem.textContent = email;
            teamMembersList.appendChild(listItem);
        } else {
            alert("Invalid email address. Please try again.");
        }
    });</script>
<!-- courses section ends -->

    <!-- Footer section -->
    <footer class="footer">
        <!-- Add footer content here -->
    </footer>
    <!-- JavaScript file -->
    <script src="js/script.js"></script>
</body>
</html>
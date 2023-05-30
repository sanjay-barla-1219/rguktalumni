<html lang='en'>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link rel="icon" href="./assets/images/logo4.png"> 
        <title>Registration Form</title>
        <style>
            body {
			background-image: url('bg.jpg');
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
		}
        </style>
    </head>
    <body bgcolor="gray">
        <h1 style="text-align: center;">Alumuni Registration</h1>
        <div class="card">
        <div><h2>Registration Form</h2></div>
        <form action="Registration.php" method="post">
                <label for="Rno">Regd.No: </label>
                <input type="text" placeholder="Enter Regd.No" required name="Rno"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="join">Year of Joining</label>
                <select id="year" name="year"></select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="branches">Select a branch:</label>
                    <select id="branches" name="branches">
                    <option value="">--Select a branch--</option>
                    <option value="Civil">Civil Engineering</option>
                    <option value="CSE">Computer Science and Engineering</option>
                    <option value="ECE">Electronics and Communication Engineering</option>
                    <option value="Mech">Mechanical Engineering</option>
                    <option value="CE">Chemical Engineering</option>
                    <option value="ME">Metallurgical Engineering</option>
                    </select><br><br>
            <div>
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" max="2005-12-31" required/><br><br>
            </div>
            <h3>Personal Details</h3>
            <div>
                <label for="photo">Upload a photo:</label><br>
                <input type="file" id="photo" name="photo">  <br><br>                
            </div>
            <div>
                <label for="first-name">First Name:</label>
                <input type="text" id="first-name" name="first_name" required><br><br>
            </div> 
            <div>   
                <label for="middle-name">Middle Name:</label>
                <input type="text" id="middle-name" name="middle-name"><br><br>
            </div>
            <div>    
                <label for="last-name">Last Name:</label>
                <input type="text" id="last-name" name="last_name" required><br><br>
            </div>
            <div>    
                <label for="email">Email:</label>
                <input type="email" id="email" name="email"><br><br>
            </div>
            <div>     
                <label for="aadhaar-number">Aadhaar Number:</label>
                <input type="number" maxlength="12" id="aadhaar-number" name="aadhaar-number"><br><br>
            </div>
            <div>     
                <label for="currentcity">Current City</label>
                <input type="text"  id="currentcity" name="currentcity" placeholder="Vijaywada.."><br><br>
            </div>
            <div>    
                <label for="mobile">Mobile:</label>
                <input type="tel" id="mobile" name="mobile"><br><br>
            </div>
            <div>     
                <label for="address">Complete Address:</label>
                <textarea id="address" name="address" ></textarea><br><br>
            </div>
            

            <h3>Higher Education Details</h3>
            <div>
                <label for="higher-studies">Higher Studies:</label>
                    <select id="higher-studies" name="higher-studies">
                    <option value="ms">MS</option>
                    <option value="mtech">M.Tech</option>
                    <option value="mba">MBA</option>
                    <option value="me">ME</option>
                    <option value="na">Not Applicable</option>
                    </select><br><br>
            </div>
            <div>
                <label for="gate-score">Gate Score(Optional)</label>
                <input type="number" name="gate_score" id="gate_score" max="100"/><br><br>
            </div>
            <div>
                <label for="gre-score">GRE Score(Optional)</label>
                <input type="number" name="gre_score" id="gre_score"/><br><br>
            </div>
            <div>
                <label for="toefl-score">TOEFL Score(Optional)</label>
                <input type="number" name="toefl_score" id="toefl_score"/><br><br>
            </div>
            <div>
                <label for="ielts-score">IELTS Score(Optional)</label>
                <input type="number" name="ielts_score" id="ielts_score"/><br><br>
            </div>
            <div>
                <label for="other-score">Other Score if any (Optional)</label>
                <input type="number" name="other_score" id="other_score"/><br><br>
            </div>
            <h3>Research Details</h3>
            <div>
                <label>Research </label><br>
                <div style="margin-left:20px">
                <input type="checkbox" id="mphil" name="higher_edu" value="M.Phil">
                <label for="mphil">M.Phil</label><br>

                <input type="checkbox" id="phd" name="higher_edu" value="Ph.D">
                <label for="phd">Ph.D</label><br>
                <input type="checkbox" id="none" name="higher_edu" value="None">
                <label for="none">None</label><br><br>
                </div>
            </div>

            <div>
                <label for="specialization">Specialization</label>
                <input type="text" id="specialization" name="specialization"/><br><br>
            </div>

            <div>
                <label for="research-area">Area of Research</label>
                <input type="text" id="research_area" name="reaserch_area"/><br><br>
            </div>

            <div>
                <label for="institution">Name of the institution</label>
                    <input type="text" id="institution" name="institution"/><br><br>
            </div>
            <div>
                <label for="country">Name of the Country</label>
                <input type="text" id="country" name="country"/><br><br>
            </div>

            <h3>Present Working Details</h3>
            <div>
                <label for="placement">Placement Provided by RGUKT</label>
                <select id="placement" name="placement">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select><br><br>
            </div>
            <div>
                <label for="organization">Present Organization</label>
                <input id="organization" name="organization" type="text"/><br><br>
            </div>
            <div>
                <label for="position">Current Position/Designation</label>
                <input id="position" name="position" type="text"/><br><br>
            </div>

            <h3>Previous working Details (if any)</h3>
            <div>
                <label for="experience">Experience Summary Previous Organization</label>
                <input id="experience" name="experience" type="text"/><br><br>
            </div>
            <div>
                <label for="prev_designation">Previous/Designation</label>
                <input id="prev_designation" name="prev_designation" type="text"/><br><br>
            </div>

            <div>
                <label for="ex_summary">Experience Summary Previous Organizations</label>
                <textarea id="ex_summary" name="ex_summary" rows="5" cols="50" placeholder="Experience Summary..."></textarea><br><br>
            </div>

            <div>
                <label for="prev_position">Previous Positions/Designation</label>
                <input id="prev_position" name="prev_position" type="text"/><br><br>
            </div>

            <h3>Other Details</h3>
            <div>
                <label for="expertise">Technology Expertise(Expertise in)</label>
                <input id="expertise" name="expertise" type="text"/><br><br>
            </div>

            <div>
                <label for="domain">Domain Knowledge</label>
                <input id="domain_knowledge" name="domain_knowledge" type="text"/><br><br>
            </div>

            <div>
                <label for="contribution">Contribution towards RGUKT SKLM</label>
                <input id="contribution" name="contribution" type="text"/><br><br>
            </div>

            <div>
                <label for="visit">When can you visit our Campus(Tentative Dates)</label>
                <input id="visit" name="visit" type="date"/><br><br>
            </div>

            <div>
                <label for="suggestion">Your Suggestions</label>
                <textarea  placeholder="Suggestions..." id="suggestion" name="suggestion"  rows="5" cols="50"></textarea><br><br>
            </div>

            <div>
                <label for="others">Any Other Information</label>
                <textarea id="others" name="others"  rows="5" cols="50"></textarea><br><br>
            </div>
            <div>
                    <input type="submit"/>
            </div>
        </form>
    </div>
    </body>
</html>
<style>
    body{
        background-color:#2F3C7E;
        color:white;
    }
    div{
        margin-bottom: 6px;
        align-items:center;
        justify-content: space-evenly;
    }
    div > label{
        float: left;

    }
    div > input,div > select{
        margin:3px;
        width:100%;
    }

    div > label{
        font-weight:450;
    }
    textarea{
        width:100%;
    }
    .card{
        background-color:#FBEAEB;
        color:black;
        align-items:center;
        /* height:80vh; */
        margin:0px auto;
        border:1px black solid;
        border-radius:8px ;
        box-shadow:5px -5px -5px 5px black ;
        padding:20px;
        margin:0px auto;
        min-width:100%;
        max-width:100%;
        opacity:0.9;
    }

</style>

<script>
    var select = document.getElementById("year");

for (var i = 2008; i <= 2023; i++) {
  var option = document.createElement("option");
  option.value = i;
  option.text = i;
  select.appendChild(option);
}

</script>
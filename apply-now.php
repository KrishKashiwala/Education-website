<!DOCTYPE html>
<html lang="en">

	<head>
		<link rel="stylesheet" type="text/css" href="apply-now.css">
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
		
		<title>Apply | Now</title>
	</head>

	<body>
		<div class="container">
			<div class="des">
				<h3>Ready to begin as an Educore Mentor?</h3>
				<small>Plenty of teachers are inspiring the learners daily.</small>
			</div>
			<form action="">
				<div class="sub-container">
					<div class="left-container">
						<div id="aftereffect" class="form-floating mb-3">
							<input type="text" class="form-control" id="fullname"
								name="fullname" placeholder="enter full name">
							<label for="fullname">Full Name</label>
						</div>
						<div id="aftereffect">
							<label for="jobFunction">Job Function</label>
							<select class="form-select mb-3"
								aria-label="Default select example" name="Job Function"
								id="jobFunction">
								<option style="opacity : 0.3" selected disabled>Select
									...
								</option>
								<option value="Frontend">Frontend</option>
								<option value="Backend">Backend</option>
								<option value="FullStackDeveloper">Full Stack Developer
								</option>
							</select>
						</div>
						<div id="aftereffect">
							<label for="primaryDiscipline">Primary Discipline</label>
							<select class="form-select mb-3"
								aria-label="Default select example" name="Job Function"
								id="primaryDiscipline">
								<option style="opacity : 0.3" selected disabled>Select
									...
								</option>
								<option value="Frontend">Frontend</option>
								<option value="Backend">Backend</option>
								<option value="FullStackDeveloper">Full Stack Developer
								</option>
							</select>
						</div>
						<div id="aftereffect">
							<label for="Country">Country</label>
							<select class="form-select mb-3"
								aria-label="Default select example" name="Job Function"
								id="Country">
								<option style="opacity : 0.3" selected disabled>Select
									...
								</option>
								<option value="India">India</option>
							</select>
						</div>
					</div>
					<div class="right-container">
						<div class="form-floating mb-3">
							<input type="email" class="form-control" id="email" name="email"
								placeholder="Enter Your Email Address...">
							<label for="email">Email</label>
						</div>
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="jobTitle"
								name="jobTitle" placeholder="Enter Your Job Title...">
							<label for="jobTitle">Job Title</label>
						</div>
						<div class="form-floating ">
							<input type="number" class="form-control" id="phno" name="phno"
								placeholder="Enter Your Phone Number">
							<label for="phno">Phone Number</label>
						</div>
					</div>
				</div>

				<div class="form-group mb-3" id="textField">
					<span>Tell Us About Yourself</span>
					<textarea onkeyup="textAreaAdjust(this)" class="form-control" id="divText"
						name="info">
					</textarea>

				</div>
			</form>
			<div class="footer">
				<small>By clicking “Submit” and submitting my information in the form above, I
					certify that I, as a Mentor, have the autonomy to make decisions regarding
					supplementary
					learning for my students. I agree to the Educore&nbsp;<a href="/">Terms Of
						Use</a>&nbsp;and
					&nbsp;<a href="/">Privacy
						Notice</a>
				</small>


				<button type="submit" class="btn extra">Submit</button>
			</div>
		</div>
		<script src="../js/apply-now.js"></script>
	</body>

</html>
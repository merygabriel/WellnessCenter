// Set a timeout for user inactivity (e.g., 30 minutes)
const inactivityTimeout = 30 * 60 * 1000; // 30 minutes in milliseconds
let timer;

function startLogoutTimer() {
  clearTimeout(timer);
  timer = setTimeout(logoutUser, inactivityTimeout);
}

function resetLogoutTimer() {
  clearTimeout(timer);
  startLogoutTimer();
}

function logoutUser() {
  // Perform an AJAX request to log the user out on the server
  const xhr = new XMLHttpRequest();
  xhr.open('GET', 'logout.php', true);
  xhr.send();

  // Redirect to the logout page (optional)
  // window.location.href = 'logout.php';
}

// Trigger the timer when the user interacts with the page
document.addEventListener('mousemove', resetLogoutTimer);
document.addEventListener('keydown', resetLogoutTimer);

// Start the initial timer
startLogoutTimer();







// $(document).ready(function () {
//     $("#registrationForm").submit(function (e) {
//         e.preventDefault();
		
//         if (validateForm()) {
//             createVerificationElements("verificationDiv");
//         }
//     });

//     function createVerificationElements(targetElementId) {
//         var targetElement = document.getElementById(targetElementId);

//         if (targetElement) {
//             var textNode = document.createTextNode("Please enter the verification code: ");

//             var codeInput = document.createElement("input");
//             codeInput.type = "text";
//             codeInput.name = "verification_code";
//             codeInput.id = "verificationCodeInput";

//             var verifyButton = document.createElement("button");
//             verifyButton.textContent = "Verify";
//             verifyButton.id = "verifyButton";

//             targetElement.innerHTML = ""; 
//             targetElement.appendChild(textNode);
//             targetElement.appendChild(codeInput);
//             targetElement.appendChild(verifyButton);


			
//             // Verification button click handler
// 			function verifyCode() {
//     var verificationCode = $("#verificationCodeInput").val();

//     $.ajax({
//         type: "POST",
//         url: "index.php",
//         data: { verification_code: verificationCode },
//         success: function (response) {
//             if (response === "Verification successful!") {
               
//                 alert("Verification successful!");
//             } else {
                
//                 alert("Verification code is incorrect. Please click 'Resend' if needed.");
//             }
//         },
//         error: function () {
//             alert("Verification process encountered an error. Please try again later.");
//         }
//     });
// }
//         }
//     }
// });
const content=document.getElementById("content");
function changeBackground(image){document.body.style.backgroundImage=`linear-gradient(rgba(3,15,35,.55),rgba(3,15,35,.75)),url("${image}")`;}
function showHome(){changeBackground("home.jpg");content.innerHTML=`<h2>About GeoFort-Tech</h2><p>GeoFort-Tech provides secure cloud, DevOps, and application security solutions for organizations.</p>`;}
function showCloudSecurity(){changeBackground("cloud-security.jpg");content.innerHTML=`<h2>Cloud Security</h2><p>We help organizations secure AWS environments, manage IAM access, protect data, monitor threats, and strengthen cloud compliance.</p>`;}
function showDevOps(){changeBackground("devops.jpg");content.innerHTML=`<h2>DevOps</h2><p>We help organizations automate software delivery using CI/CD pipelines, Docker, Kubernetes, Terraform, and modern cloud technologies.</p>`;}
function showApplicationSecurity(){changeBackground("application-security.jpg");content.innerHTML=`<h2>Application Security</h2><p>We help identify vulnerabilities, secure application code, scan dependencies, and improve secure software development practices.</p>`;}
function showContact(){changeBackground("contact.jpg");content.innerHTML=`<h2>Contact GeoFort-Tech</h2><p>Complete the form below.</p>
<form class="contact-form" method="POST" action="index.php">
<label>Name<input name="name" type="text" required></label>
<label>Email<input name="email" type="email" required></label>
<label>Message<textarea name="message" required></textarea></label>
<button class="contact-button" type="submit">Send Message</button></form>`;}
document.getElementById("year").textContent=new Date().getFullYear();

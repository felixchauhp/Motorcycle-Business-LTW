// Giả lập dữ liệu người dùng từ file JSON
const users = {
    user1: "password123",
    user2: "mypassword",
    admin: "admin123",
};

document.getElementById("loginForm").addEventListener("submit", function (e) {

    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    console.log(username, password);
});

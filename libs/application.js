let chat = document.querySelector("#chat");
let bgColors = document.querySelector(".bg-colors");
let menu = document.querySelector("#menu");
let message = document.querySelector("#message");
let sendMessage = document.querySelector("#send");

sendMessage.addEventListener("click", function() {
  let formData = new FormData();
  formData.set("message", message.value);
  axios({
    method: "post",
    url: "/content/addMessage",
    data: formData
  });
});

bgColors.addEventListener("click", function(e) {
  const target = getComputedStyle(e.target);
  document.body.style.backgroundColor = target.backgroundColor;
  menu.classList.replace("bg-primary", "bg-dark");
});

let interval = setInterval(() => {
  getMessages().then(messages => {
    let output = "";
    for (let message of messages) {
      output += `
      <div class="chat-user p-3">
          <div class="user-message">
          <img src="https://i.imgur.com/H357yaH.jpg" class="chat_img" alt="profile">
          <p>
              ${message.chat_message}
          </p>
          </div>
          <small>${message.created_at}</small>
      </div>
      `;
    }
    chat.innerHTML = output;
    output = "";
  });
}, 2000);

async function getMessages() {
  const data = await axios.get("content/chat");
  return data.data;
}

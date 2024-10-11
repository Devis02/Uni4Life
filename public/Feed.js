document.addEventListener("DOMContentLoaded", function () {
  const postButton = document.querySelector(".new-post button");
  const textarea = document.querySelector(".new-post textarea");
  const postsContainer = document.querySelector(".posts");

  // Simulando dados do usuário conectado
  const currentUser = {
    name: "Pessoa da Silva", // Nome do usuário conectado
    profilePic: "../Uni4Life/Complementos/perfilfoto.jpeg", // Caminho para a foto de perfil
  };

  postButton.addEventListener("click", function () {
    const postContent = textarea.value.trim();

    if (postContent) {
      const newPost = document.createElement("div");
      newPost.classList.add("post");

      let likesCount = 0;
      let commentsCount = 0;

      newPost.innerHTML = `
        <div class="post-header">
            <img src="${currentUser.profilePic}" alt="Perfil" class="post-profile-pic" />
            <span class="post-username">${currentUser.name}</span>
        </div>
        <p>${postContent}</p>
        <div class="post-options">
            <span class="like" data-likes="0">
                <img class="icons" src="../Uni4Life/Complementos/rede-social.png" alt="Curtir" /> <span class="likes-count">${likesCount}</span>
            </span>
            <span class="comment" data-comments="0">
                <img class="icons" src="../Uni4Life/Complementos/comente.png" alt="Comentar" /> <span class="comments-count">${commentsCount}</span>
            </span>
            <span class="share">
                <img class="icons" src="../Uni4Life/Complementos/share-square.png" alt="Compartilhar" />
            </span>
            <span class="save-post" style="cursor: pointer;">
                <img class="icons" src="../Uni4Life/Complementos/quadrado-mais.png" alt="Salvar" />
            </span>
        </div>
        <br>
        <div class="comments-section"></div>
        <textarea class="comment-input" placeholder="Escreva um comentário..." style="display:none;"></textarea>
        <button class="submit-comment" style="display:none;">Comentar</button>
      `;

      postsContainer.prepend(newPost);
      textarea.value = "";

      // Adiciona funcionalidade de curtir
      newPost.querySelector(".like").addEventListener("click", function () {
        likesCount++;
        this.querySelector(".likes-count").textContent = likesCount;
      });

      // Adiciona funcionalidade de comentar
      const commentButton = newPost.querySelector(".comment");
      const commentInput = newPost.querySelector(".comment-input");
      const submitCommentButton = newPost.querySelector(".submit-comment");
      const commentsSection = newPost.querySelector(".comments-section");

      commentButton.addEventListener("click", function () {
        commentInput.style.display = "block";
        submitCommentButton.style.display = "block";
        commentInput.focus(); // Focar na caixa de texto ao abrir
      });

      submitCommentButton.addEventListener("click", function () {
        const commentContent = commentInput.value.trim();
        if (commentContent) {
          commentsCount++;
          const commentElement = document.createElement("div");
          commentElement.classList.add("comment");

          let commentLikesCount = 0;

          commentElement.innerHTML = `
          <div class="comment-header">
              <img src="${currentUser.profilePic}" alt="Perfil" class="comment-profile-pic" />
              <span class="comment-username">${currentUser.name}:</span> 
              <span>${commentContent}</span>
          </div>
          <span class="like-comment" data-likes="0" style="cursor: pointer;">
              <img class="icons" src="../Uni4Life/Complementos/rede-social.png" alt="Curtir" /> <span class="likes-count">${commentLikesCount}</span>
          </span>
        `;        

          commentsSection.appendChild(commentElement);
          commentInput.value = "";
          commentInput.style.display = "none";
          submitCommentButton.style.display = "none";
          commentButton.querySelector(".comments-count").textContent = commentsCount;

          // Adiciona funcionalidade de curtir no comentário
          commentElement.querySelector(".like-comment").addEventListener("click", function () {
            commentLikesCount++;
            this.querySelector(".likes-count").textContent = commentLikesCount;
          });
        } else {
          alert("Por favor, escreva um comentário!");
        }
      });

      // Adiciona funcionalidade de compartilhar
      newPost.querySelector(".share").addEventListener("click", function () {
        alert("Post compartilhado!"); // adicionar lógica para compartilhar
      });

      // Lógica para o ícone "Salvar Post"
      newPost.querySelector(".save-post").addEventListener("click", function () {
        alert("Post salvo com sucesso!"); // adicionar lógica para salvar o post
      });
    } else {
      alert("Por favor, escreva algo antes de publicar!");
    }
  });

  // Ajuste a altura da textarea
  textarea.addEventListener("input", function () {
    this.style.height = "auto";
    this.style.height = this.scrollHeight + "px";
  });
});
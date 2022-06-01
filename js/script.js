// AOS Function
AOS.init();

// Light Mode Function
function myFunction() {
  var element = document.body;
  element.classList.toggle("light-mode");
}

//  Loading Function
$(document).ready(function () {
  $(".bg-loader").hide();
});

// Redirect to challenge page Function button
function myRedirect() {
  Swal.fire({
    title: "Your Name",
    html: `<input type="text" id="name" class="swal2-input" placeholder="Username">`,
    confirmButtonText: "Submit",
    focusConfirm: false,
    preConfirm: () => {
      const name = Swal.getPopup().querySelector("#name").value;
      if (!name) {
        Swal.showValidationMessage(`Please enter your name`);
      }
      return { name: name };
    },
  }).then((result) => {
    Swal.fire({
      icon: "success",
      title: `Halo ${result.value.name}`,
      text: `semoga berhasil melewati tantangan dari kami yaa :)`,
      footer: `<a href="level1" style="padding: 10px; background-color: rgb(56 189 248 / 1); color: white; border: box-shadow: 0 0 0 3px transparent; border-radius: 10px;" class="btn btn-primary">Play Challenge</a>`.trim(),
    });
  });
}

// document.addEventListener('DOMContentLoaded', function() {
//     const handTopLinks = document.querySelectorAll('.hand_top');
//     handTopLinks.forEach(function(link) {
//       link.addEventListener('click', function(event) {
//         event.preventDefault();
//         const listDiv = this.closest('.list');
//         if (listDiv) {
//           const previousListDiv = listDiv.previousElementSibling;
//           if (previousListDiv) {
//             listDiv.parentElement.insertBefore(listDiv, previousListDiv);
//           }
//         }
//       });
//     });
//   });
//   // *****************************************************************
//   document.addEventListener('DOMContentLoaded', function() {
//     const handBottomLinks = document.querySelectorAll('.hand_bottom');
//     handBottomLinks.forEach(function(link) {
//         link.addEventListener('click', function(event) {
//             event.preventDefault();
//             const listDiv = this.closest('.list');
//             if (listDiv) {
//                 const nextListDiv = listDiv.nextElementSibling;
//                 if (nextListDiv) {
//                     listDiv.parentElement.insertBefore(nextListDiv, listDiv);
//                 }
//             }
//         });
//     });
// });

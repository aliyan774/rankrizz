function toggleVisibility(tabId){
    var tabContents = document.querySelectorAll('.tab-content');
    tabContents.forEach(function (tab){
        tab.classList.add('hidden')
    })

    var selectedTab = document.getElementById(tabId);
    selectedTab.classList.remove('hidden');
}


// document.addEventListener('DOMContentLoaded', function() {
//     var navTabs = document.querySelectorAll('.nav-link');
//     var tabContents = document.querySelectorAll('.tab-content');

    

//     function deactivateTabs() {
//         navTabs.forEach(function(tab) {
//             tab.classList.remove('active');
//         });
//         tabContents.forEach(function(content) {
//             content.classList.remove('active');
//         });
//     }

//     navTabs.forEach(function(tab) {
//         tab.addEventListener('click', function(event) {
//             event.preventDefault();
//             deactivateTabs();

//             tab.classList.add('active');
//             var targetContent = document.getElementById(tab.getAttribute('data-tab'));
//             if (targetContent) {
//                 targetContent.classList.add('active');
//             }
//         });
//     });
// });
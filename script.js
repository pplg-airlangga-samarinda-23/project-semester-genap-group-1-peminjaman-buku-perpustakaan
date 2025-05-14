// Function to show specific page and highlight active navigation
function ShowPage(pageNumber) {
    // Hide all content sections first
    document.getElementById("DashPapan").classList.remove("active");
    document.getElementById("BukuPapan").classList.remove("active");
    document.getElementById("AnggotaPapan").classList.remove("active");
    document.getElementById("PinjamPapan").classList.remove("active");
    document.getElementById("LaporanPapan").classList.remove("active");
    
    // Show the selected page
    if (pageNumber === 1) {
        document.getElementById("DashPapan").classList.add("active");
    } else if (pageNumber === 2) {
        document.getElementById("BukuPapan").classList.add("active");
    } else if (pageNumber === 3) {
        document.getElementById("AnggotaPapan").classList.add("active");
    } else if (pageNumber === 4) {
        document.getElementById("PinjamPapan").classList.add("active");
    } else if (pageNumber === 5) {
        document.getElementById("LaporanPapan").classList.add("active");
    }
}

// Function to handle card clicks (alternative to href)
function ahaw(showId, hideId) {
    document.getElementById(hideId).classList.remove("active");
    document.getElementById(showId).classList.add("active");
}
// References to DOM Elements
const prevBtn = document.querySelector("#prev-btn");
const nextBtn = document.querySelector("#next-btn");
const book = document.querySelector("#book");

// Selecting all pages dynamically
const papers = document.querySelectorAll(".paper");
const numOfPapers = papers.length;

// Debugging output
console.log('Number of papers: ${numOfPapers}');

// Event Listener
prevBtn.addEventListener("click", goPrevPage);
nextBtn.addEventListener("click", goNextPage);

// Business Logic
let currentLocation = 1;
let maxLocation = numOfPapers + 1;

function openBook() {
    console.log("Opening book...");
    book.style.transform = "translateX(50%)";
    prevBtn.style.transform = "translateX(-180px)";
    nextBtn.style.transform = "translateX(180px)";
}

function closeBook(isAtBeginning) {
    console.log('Closing book at beginning: ${isAtBeginning}');
    if (isAtBeginning) {
        book.style.transform = "translateX(0%)";
    } else {
        book.style.transform = "translateX(100%)";
    }
    prevBtn.style.transform = "translateX(0px)";
    nextBtn.style.transform = "translateX(0px)";
}

function goNextPage() {
    console.log('Going to next page. Current location: ${currentLocation}');
    if (currentLocation < maxLocation) {
        if (currentLocation === 1) {
            openBook();
        }
        if (currentLocation === numOfPapers) {
            closeBook(false);
        }

        const currentPaper = papers[currentLocation - 1];
        currentPaper.classList.add("flipped");
        currentPaper.style.zIndex = currentLocation;
        currentLocation++;
        console.log('Flipped to page ${currentLocation}');
    }
}

function goPrevPage() {
    console.log('Going to previous page. Current location: ${currentLocation}');
    if (currentLocation > 1) {
        if (currentLocation === 2) {
            closeBook(true);
        }
        if (currentLocation === maxLocation) {
            openBook();
        }

        const previousPaper = papers[currentLocation - 2];
        previousPaper.classList.remove("flipped");
        previousPaper.style.zIndex = numOfPapers - currentLocation + 2;
        currentLocation--;
        console.log('Returned to page ${currentLocation}');
    }
}

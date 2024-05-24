const quizContainer = document.getElementById('quiz');
const submitButton = document.getElementById('submit-btn');

const questions = [
    {
        question: "What is one major economic benefit of transportation services in urban areas like New York City?",
        answers: {
            a: "Reduced crime rates",
            b: "Increased productivity and economic activity",
            c: "Decreased real estate prices",
            d: "Improved weather conditions"
        },
        correctAnswer: "b"
    },
    {
        question: "How do public transportation services contribute to environmental sustainability in urban areas?",
        answers: {
            a: "By increasing traffic congestion",
            b: "By reducing the number of private vehicles on the road",
            c: "By encouraging the use of fossil fuels",
            d: "By decreasing the availability of public spaces"
        },
        correctAnswer: "b"
    },
    // Add more questions as needed
];

function buildQuiz() {
    const output = [];

    questions.forEach((question, index) => {
        const answers = [];

        for (const option in question.answers) {
            answers.push(
                `<label>
                    <input type="radio" name="question${index}" value="${option}">
                    ${option}: ${question.answers[option]}
                </label>`
            );
        }

        output.push(
            `<div class="question">${index + 1}. ${question.question}</div>
            <div class="answers">${answers.join('')}</div>`
        );
    });

    quizContainer.innerHTML = output.join('');
}

function showResults() {
    const answerContainers = quizContainer.querySelectorAll('.answers');
    let numCorrect = 0;

    questions.forEach((question, index) => {
        const answerContainer = answerContainers[index];
        const selector = `input[name=question${index}]:checked`;
        const userAnswer = (answerContainer.querySelector(selector) || {}).value;

        if (userAnswer === question.correctAnswer) {
            numCorrect++;
            answerContainers[index].style.color = 'lightgreen';
        } else {
            answerContainers[index].style.color = 'red';
        }
    });

    alert(`You got ${numCorrect} out of ${questions.length} questions correct!`);
}

buildQuiz();

submitButton.addEventListener('click', showResults);

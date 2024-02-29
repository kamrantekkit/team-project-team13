import './bootstrap';

let calendarDiv = document.getElementById('calendar');
console.log(calendarDiv);

function printEvents(events) {
    events.forEach(event => {
        // calendarDiv.innerHTML += `<div class="event">
        // <h3 class="event-date">${month[event.date.getMonth()]}<br/>${event.date.getDate()}</h3>
        // <img class="event-img" src="${event.img}" />
        // <div class="event-description">
        //     <h2 class="event-name">${event.name}</h2>
        //     <p class="event-time">${event.date.getHours()}:00</p>
        //     <p class="event-location">${event.location}</p>
        // </div>
        // <button class="event-button btn btn-dark" type="button"  data-bs-toggle="modal" data-bs-target="#modal${event.id}">More Info</button>
        // </div>
        // <div class="modal fade" id="modal${event.id}" tabindex="-1" role="dialog"
        //     aria-labelledby="modal${event.id}" aria-hidden="true">
        //     <div class="modal-dialog modal-dialog-centered" role="document">
        //         <div class="modal-content">
        //             <div class="modal-header">
        //                 <h5 class="modal-title" id="exampleModalLongTitle">${event.name}</h5>
        //             </div>
        //             <div class="modal-body">
        //             ${event.description}
        //             </div>
        //             <div class="modal-footer">
        //                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        //             </div>
        //         </div>
        //     </div>
        // </div>`;
        calendarDiv.innerHTML += `<div class="event-new">
        <div class="event-date-div">
            <h3 class="event-date">${month[event.date.getMonth()]} ${event.date.getDate()}</h3>
            <p class="event-time">${event.date.getHours()}:00</p>
            <!-- <img class="event-img" src="${event.img}" /> -->
        </div>
        <div class="event-description">
            <h2 class="event-name">${event.name}</h2>
            <p>${event.snippet}</p>
            <p class="event-location">Location: ${event.location}</p>
        </div>
        <button class="event-button btn btn-dark" type="button" data-bs-toggle="modal"
            data-bs-target="#modal${event.id}">More Info</button>
    </div>
    <div class="modal fade" id="modal${event.id}" tabindex="-1" role="dialog" aria-labelledby="modal${event.id}"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">${event.name}</h5>
                </div>
                <div class="modal-body">
                    ${event.description}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>`;
    });
}

window.addEventListener("load", (event) => {
    printEvents(events);
})

const month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
let events = [
    {
        id: 0,
        name: 'Halloween Coding Competition',
        date: new Date("October 31, 2023 17:00:00"),
        location: 'Aston MB',
        snippet: `Some short info about this event, a little snippet.`,
        description: `We are pleased to announce our Halloween Coding Competition!<br/><br/>
        This is a great opportunity for you to:
        <ul><li>Code a project outside of your modules</li>
        <li>Demonstrate your coding skills</li>
        <li>Compete against other students</li>
        </ul>
        This competition is open to all years! To ensure fairness there will be two categories:
        First-time Coders (First Years/Conversation Masters):
        You are to create a project based on the theme of Halloween in the Processing Java IDE only

        Intermediate Coders (Second Years+):
        You are to create a website or game based on the theme of Halloween using whichever language/skills you wish, but you can not use Processing Java IDE.

        You will only be judged against others within the same category.`,
        img: 'assets/img/jack-o-lantern.png',
    },
    {
        id: 1,
        name: 'Event',
        date: new Date(),
        location: 'Aston MB',
        snippet: `Some short info about this event, a little snippet.`,
        description: 'This is a test event',
        img: 'assets/img/joystick.png',
    },
    {
        id: 2,
        name: 'Event',
        date: new Date(),
        location: 'Aston MB',
        snippet: `Some short info about this event, a little snippet.`,
        description: 'This is a test event',
        img: 'assets/img/joystick.png',
    },
    {
        id: 3,
        name: 'Event',
        date: new Date(),
        location: 'Aston MB',
        snippet: `Some short info about this event, a little snippet.`,
        description: 'This is a test event',
        img: 'assets/img/joystick.png',
    },
];

import React, { Component } from "react";

export default class Header extends Component {
  render() {
    return (
      <section className="header">
        <i class="fas fa-cloud fa-4x" />
        <h1>
          Hi, I'm <strong>Photon</strong>, another fine{" "}
          <p class="headtxt">
            little freebie from
            <a href="http://html5up.net"> HTML5 UP</a>.
          </p>
        </h1>
        <p>
          Accumsan feugiat mi commodo erat lorem ipsum, sed magna lobortis
          feugiat sapien sed etiam volutpat accumsan.
        </p>
        <ul className="actions">
          <li>
            <a class="button scrolly" href="#one">
              Discover
            </a>
          </li>
        </ul>
      </section>
    );
  }
}

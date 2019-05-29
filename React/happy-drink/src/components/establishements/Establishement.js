import React, { Component } from "react";

class Establishment extends Component {
  constructor(props) {
    super(props);
    // On initialise nos deux variables
    this.state = {
      isLiked: false,
      isDisliked: false,
      likeCounter: 0,
      dislikeCounter: 0,
      favori: false,
    };
  }

  // fonction appelée lors du clic sur l'élément "like"
  like = () => {
    // On met à jour le compteur à chaque clic sur le composant "like"
    let likeCounter = this.state.likeCounter;
    let dislikeCounter = this.state.dislikeCounter;

    likeCounter += !this.state.isLiked ? 1 : -1;
    dislikeCounter += this.state.isDisliked ? -1 : 0;

    this.setState({
      isLiked: !this.state.isLiked,
      isDisliked: this.state.isDisliked
        ? !this.state.isDisliked
        : this.state.isDisliked,
      likeCounter: likeCounter,
      dislikeCounter: dislikeCounter
    });
  };

  // fonction appelée lors du clic sur l'élément "dislike"
  dislike = () => {
    // On met à jour le compteur à chaque clic sur le composant "dislike"
    let likeCounter = this.state.likeCounter;
    let dislikeCounter = this.state.dislikeCounter;

    dislikeCounter += !this.state.isDisliked ? 1 : -1;
    likeCounter += this.state.isLiked ? -1 : 0;

    this.setState({
      isDisliked: !this.state.isDisliked,
      isLiked: this.state.isLiked ? !this.state.isLiked : this.state.isLiked,
      likeCounter: likeCounter,
      dislikeCounter: dislikeCounter
    });
  };

  favori = () => {
    this.setState({
      favori: !this.state.favori
    });
  };

  render() {
    // On définit les éléments "upIcon(like) et downIcon(dislike)"
    // on utilise ici Font-Answome (on inclura le fichier css dans ./public.index.html)
    let upIcon = <i className="fa fa-thumbs-up" aria-hidden="true" />;
    let downIcon = <i className="fa fa-thumbs-down" aria-hidden="true" />;
    let starIcon = <i className="far fa-star" aria-hidden="true" />;

    // Si l'on n'a pas encore "liké"
    if (!this.state.isLiked) {
      upIcon = <i className="far fa-thumbs-up" aria-hidden="true" />;
    }
    // Si l'on a pas encore "disliké"
    if (!this.state.isDisliked) {
      downIcon = <i className="far fa-thumbs-down" aria-hidden="true" />;
    }
    if (this.state.favori) {
      starIcon = <i className="fa fa-star favoriIcon" aria-hidden="true" />;
    }

    return (
      <div className="establishment">
        <div className="establishment-favori">
          <button onClick={this.favori}>{starIcon}</button>
        </div>
        <div className="establishment-description">
          <h3>{this.props.establishment.name}</h3>

          {this.props.establishment.description}
        </div>
        <div className="establishmentLikeDislike">
          <button onClick={this.like}>{upIcon} </button>{" "}
          <span>{this.state.likeCounter}</span>
          <button onClick={this.dislike}>{downIcon}</button>{" "}
          <span>{this.state.dislikeCounter}</span>
        </div>
      </div>
    );
  }
}

export default Establishment;
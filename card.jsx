import React from "react";
import Profile from "./profile";
import Details from "./details";

function Card(props) {
  return (
    <div className="card">
      <div className="top">
        <h2 className="name">{props.name}</h2>
        <Profile img={props.img}/>
      </div>
      <div className="bottom">
        <Details info={props.tel}/>
        <Details info={props.email}/>
      </div>
    </div>
  );
}

export default Card;

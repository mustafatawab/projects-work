import React, { Component } from "react";
import "./ExperienceCard.css";

class ExperienceCard extends Component {
  render() {
    const experience = this.props.experience;
    const theme = this.props.theme;
    return (
      <div
        className="experience-card"
        style={{ border: `1px solid ${experience["color"]}` }}
      >
        {experience["logo_path"] && (
          <>
            <div className="experience-card-logo-div">
              <img
                className="experience-card-logo"
                src={require(`../../assests/images/${experience["logo_path"]}`)}
                alt=""
              />
            </div>
          </>
        )}
        <div className="experience-card-body-div">
          <div className="experience-card-header-div">
            <div className="experience-card-heading-left">
              <h3
                className="experience-card-title"
                style={{ color: theme.repotext }}
              >
                {experience["title"]}
              </h3>
              <p
                className="experience-card-company"
                style={{ color: theme.repotext }}
              >
                <a
                  href={experience["company_url"]}
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  {experience["company"]}
                </a>
              </p>
            </div>
            <div className="experience-card-heading-right">
              <p
                className="experience-card-duration"
                style={{ color: theme.secondaryText }}
              >
                {experience["duration"]}
              </p>
              <p
                className="experience-card-location"
                style={{ color: theme.secondaryText }}
              >
                {experience["location"]}
              </p>
            </div>
          </div>
          <p
            className="experience-card-description"
            style={{ color: theme.repotext }}
          >
            {experience["description"]}
          </p>
          {experience["features"] &&
            experience["features"].map((feature) => {
              return (
                <p
                  className="experience-card-feature"
                  style={{ color: theme.repotext }}
                >
                  {feature}
                </p>
              );
            })}

          {experience["technology"] && (
            <>
              <strong className="p-5">Key Technologies</strong>
              {experience["technology"].map((feature) => {
                return (
                  <p
                    className="experience-card-feature"
                    style={{ color: theme.repotext }}
                  >
                    {feature}
                  </p>
                );
              })}
            </>
          )}

          {experience["highlights"] && (
            <>
              <strong className="p-5">Implementation Highlights</strong>
              {experience["highlights"].map((feature) => {
                return (
                  <p
                    className="experience-card-feature"
                    style={{ color: theme.repotext }}
                  >
                    {feature}
                  </p>
                );
              })}
            </>
          )}

          {experience["outcomes"] && (
            <>
              <strong className="p-5">Expected Outcomes</strong>
              {experience["outcomes"].map((feature) => {
                return (
                  <p
                    className="experience-card-feature"
                    style={{ color: theme.repotext }}
                  >
                    {feature}
                  </p>
                );
              })}
            </>
          )}
        </div>
      </div>
    );
  }
}

export default ExperienceCard;

import PropTypes from "prop-types";

function Title({ title }) {
  return <h1 className="text-2xl font-semibold text-slate-300">{title}</h1>;
}

Title.propTypes = {
  title: PropTypes.string.isRequired,
};

export default Title;

import styles from '@/styles/components/blogTxt.module.scss'

const BlogTxt = (
  {
    cat,
    cat2,
    ttl,
    name,
    time,
    white = false,
    fs24 = false,
    fs22 = false,
    fs14 = false,
    tac = false,
    smallMb = false
  }
) => {
  return (
    <div className={
      `
        ${styles.blogTxt}
        ${white ? styles.white : ''}
        ${tac ? styles.tac : ''}
        ${smallMb ? styles.smallMb : ''}
        ${fs24 ? styles.fs24 : ''}
        ${fs22 ? styles.fs22 : ''}
        ${fs14 ? styles.fs14 : ''}
      `
    }>
      <p className={styles.cat}>
        <span className="en">{cat}</span>
        <span className={styles.hr}></span>
        <span className="en">{cat2}</span>
      </p>
      <h3 className={
        `
          ${styles.singleTtl}
        `
      }>
        {ttl}
      </h3>
      <p className={styles.name}>
        <span className="en">BY</span>
        <span className="space"></span>
        <span className="en">{name}</span>
      </p>
      <p className={`en ${styles.time}`}>{time}</p>
    </div>
  );
}

export default BlogTxt;
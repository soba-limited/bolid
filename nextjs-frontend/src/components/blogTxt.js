import styles from '@/styles/components/blogTxt.module.scss'
import { Date } from '@/components'

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
  const upperCat2 = cat2?.toUpperCase()

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
        <span className={`en ${cat === undefined ? 'none' : ''}`}>{cat}</span>
        <span className={cat === undefined ? 'none' : styles.hr}></span>
        <span className="en">{cat === undefined ? upperCat2 : cat2}</span>
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
      <time className={`en ${styles.time}`}>{time}</time>
      {/* <Date dateString={time} /> */}
    </div>
  );
}

export default BlogTxt;
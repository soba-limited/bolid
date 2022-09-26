import styles from '@/styles/components/blogPattern1.module.scss'
import { BlogColumn3, BlogPickup, BlogScrollBox } from '@/components';

const BlogPattern1 = ({column3None, pattern, route2}) => {
  return (
    <>
      <article className={`${styles.stickyArea} ${column3None ? styles.mbNone : ''}`}>
        <BlogPickup patternData={pattern} route2={route2} />
        <BlogScrollBox patternData={pattern} route2={route2} />
      </article>

      {column3None ? '' : <BlogColumn3 patternData={pattern} route2={route2} />}
    </>
  );
}

export default BlogPattern1;